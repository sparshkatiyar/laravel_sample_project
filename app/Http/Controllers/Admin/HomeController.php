<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use DB;
use Str;
use Validator;
use Auth;
use Session;
use App\Models\Admin;
use Hash;
use App\Models\Puja;
use App\Models\PujaEcommerce;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
 
    public function index(){
        if(Auth::guard('admin')->user()){
            return view('admin/dashboard');

    	}else{
            return redirect('admin-panel/signin')->with('success','login first');
       
        }
    }

    

    public function pujaList(){
        $pujaList = Puja::all();
        return view('admin/puja-list' ,compact('pujaList'));
    }
    public function pujaListEm(){
        $pujaList = PujaEcommerce::all();
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->id);
        }       
        return view('admin/puja-list-ecommerce' ,compact('pujaList'));
    }

    public function pujaCreation(){
        return view('admin/puja-creation');
    }
    public function pujaCreationEm(){
        $pujaList = Puja::all();
        return view('admin/puja-creation-ecomm',compact('pujaList'));
    }
    public function signin()
    {
        return view('admin/signin');
    }
    public function logout()
    {
        unset($_COOKIE['email']);
        unset($_COOKIE['password']);
        unset($_COOKIE['remember']);
        setcookie("email",null, -1, "/");
        setcookie("password",null, -1, "/");
        setcookie("remember",null, -1, "/");
        Auth::logout();
        Session::flush();
        return view('admin/signin');
    }
    

    public function validateLogin(Request $request){
        $validations        =  array(
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:1', ],
           
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }
        $user_data = array(
         'email'  => $request->get('email'),
         'password' => $request->get('password')
        );

        $remember_me = $request->remember=="on"?true:false;
        if(Auth::guard('admin')->attempt($user_data,$remember_me))        
        {
            if ($request->remember=="on") {
                setcookie("email",$request->input('email'), time() + (86400 * 30), "/");
                setcookie("password",$request->input('password'), time() + (86400 * 30), "/");
                setcookie("remember",$request->input('remember'), time() + (86400 * 30), "/");
            } else {
                unset($_COOKIE['email']);
                unset($_COOKIE['password']);
                unset($_COOKIE['remember']);
                setcookie("email",null, -1, "/");
                setcookie("password",null, -1, "/");
                setcookie("remember",null, -1, "/");
            }
            return redirect('admin-panel/dashboard')->with('success','welcome dashboard');
            // return view('admin/dashboard');
        }
        else
        {
         return redirect()->back()->withInput($request->only('email','remember'))->with('error-message',"Invalid username or password");
        }
    }
    public function forgetPassword(Request $request){
        switch ($request->method()) {
            case 'GET':
                return view('admin.forgot-password');
                break;
            
            case 'POST':
                    $email = $request->only('email');
                   $data = Admin::where(['email' => $email])->first();
                   $accessToken = md5(uniqid(rand(), true));
                   if($data){
                       $data->forgetpassword_token = $accessToken;
                       $data->updated_at = time();
                       $data->save();
                       Session::put('token',$accessToken);
                       return redirect('admin/reset-password')->with('resetLinkSend',__('messages.adminMessages.resetLinkSend'));
                       
                   }else{
                       return redirect('admin/forget-password')->with('invalid_email',__('messages.adminMessages.invalid_email'));
                   }
                break;
            default:
               # code...
               break;    	
        }	 	
    }
    public function resetPassword(Request $request){
        $token = Session::get('token');        
        if(!$token){
            return redirect('admin');
        }
        switch ($request->method()) {
            case 'GET':
                return view('admin.reset-password');
                break;
            
            case 'POST':	 		
                $data = Admin::where('forgetpassword_token',$token)->first();
                    if($data){
                        $data->password = Hash::make($request->password);
                         $data->forgetpassword_token = NULL;
                         $data->save();
                         Session::forget('token');
                       return redirect('/admin')->with('error',__('messages.adminMessages.password_reset_success'));
                   }else{
                       return redirect('/admin')->with('error','Forget token expired');
                   }
                break;
            default:
               # code...
               break;    	
        }
    }

    protected function create(Request $request)
    {
        return Admin::create([
            // 'name' => $data['name'],
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'device_token'=>null,
            'access_token'=>null,
            'device_id'=>"1",
            'role'=>1,
            'remember_token'=>null
        ]);
        return redirect()->back()->withInput($request->only('email','remember'))->with('success-message',"username or password");
    }
}
