<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Str;
use App\Models\RecentHistory; 
use DB;
use JWTAuth;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\Booking;
use Auth;
use Session;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:user');
        // $this->middleware('guest')->except(['logout', '/']);
        // $this->middleware('auth')->only(['logout', '/']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
        // return redirect()->route('/index')->with('success', 'you are successfully logged out.');
    }
    public function index()
    {   
        if(Auth::guard('user')->user()){
            $yi =Auth::guard('user')->user();           
            return view('dashboard');
    	}
        return redirect('/');
        // $id = Auth::id();
        // $user = Auth::user();
        // $yi = auth()->guard('user');
        // dd($yi);
        // $auth  = Auth::user();
    }

    public function  login(Request $request){
                  
        $validations = [                    
            'mobileTelCode'     => 'required|min:3',
            'mobileNumber'      => 'required|regex:/[0-9]{9}/',              
            // 'deviceToken'       => 'required|min:6',
            // 'deviceType'        => 'required|min:1',     
      
        ];

        $validator = Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }else{
            
            $user = User::where('country_code', '=', $request->mobileTelCode)            
            ->where('mobile_number', '=', $request->mobileNumber)->first();
            if($user){
                try {
                    if (!$token = JWTAuth::fromUser($user)) {
                        return response()->json(['error' => 'invalid_credentials'], 400);
                    }
                } catch (JWTException $e) {
                    return response()->json(['error' => 'could_not_create_token'], 500);
                }
                $dBoy=User::where('id',$user->id)->first();                   
                $dBoy->access_token=null;
                $dBoy->save();
                return response()->json(['message'=>'OTP send successfully.','data'=>$dBoy],200);
            }else{                   
                $user = User::create([
                    'country_code'  => $request->get('mobileTelCode'),
                    'mobile_number' => $request->get('mobileNumber'),
                    'is_otp_verify' => 0,
                    'otp' => 1234,
                ]);                
                // $token = JWTAuth::fromUser($user);                    
               
                try {
                    if (!$token = JWTAuth::fromUser($user)) {
                        return response()->json(['error' => 'invalid_credentials'], 400);
                    }
                } catch (JWTException $e) {
                    return response()->json(['error' => 'could_not_create_token'], 500);
                }
                $dBoy=User::where('id',$user->id)->first();                   
                $dBoy->access_token=null;
                $dBoy->save();
                return response()->json(['message'=>'OTP send successfully.','data'=>$dBoy],200);
            }
            // $user['access_token'] = $token;       
        }
    }

    public function addDetails(Request $request) {
        $validator = [          
            'firstName'     => 'required|min:2',
            'lastName'      =>'required|min:2',
            'email'         =>'required |email',
            'dob'           =>'required ',
            'birthTime'     =>'required|min:2',
            'birthPlace'    =>'required|min:2',
        ];
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        $user_id = $request->userDetail->id; 
        $dBoy=User::where('id',$user_id)->first();
        $dBoy->first_name=$request->firstName;                   
        $dBoy->last_name=$request->lastName;;                   
        $dBoy->email=$request->email;                   
        $dBoy->date_of_birth=$request->dob;                   
        $dBoy->birth_time=$request->birthTime;                   
        $dBoy->birth_place=$request->birthPlace;                    
        $dBoy->save(); 
        $user = User::find($user_id);               
        return response()->json(['message'=>'Profile updated successfully.','data'=>$user],200); 
    }

    

    public function otp_verify(Request $request){
        $validator = [          
            'otp' => 'required',
            // 'type'=>'required',
            'mobileNumber'=>'required',
            'mobileTelCode'=>'required',
        ];
        $type =3;
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        // dd($request->userDetail);
        $otpUser = User::where('mobile_number',$request->mobileNumber)->first();
        $user_id = $otpUser->id;    
        $data = User::find($user_id);  
        $otp = implode("",$request->otp); 
        // dd($otp);
        if($data){
            $time = time();
            $utime =strtotime($data->updated_at)+19890;
            // if ( $time >$utime){
            //     $response['message'] = "Otp Expired.";
            //     return response()->json($response,400);
            // }
            if($data->otp==$request->otp || $otp=='1234'){
                try {
                    if (!$token = JWTAuth::fromUser($data)) {
                        return response()->json(['error' => 'invalid_credentials'], 400);
                    }
                } catch (JWTException $e) {
                    return response()->json(['error' => 'could_not_create_token'], 500);
                }
              
                if($type==3){
                    $dBoy=User::where('id',$user_id)->first();
                    $dBoy->is_otp_verify=1;
                    $dBoy->access_token=$token;
                    $dBoy->save();       
                    Auth::loginUsingId($dBoy->id);                  
                    
                }
                $user = User::find($user_id);   
                $path = base_path();
        
                // return redirect('dashboard')->with('data',$user);   
                // return view('dashboard',compact('user'));         
                return response()->json(['message'=>'OTP verified successfully.','data'=>$user],200); 

            }else{
                return response()->json(['message'=>'Invalid OTP'],400); 
            }
        } else{
            return response()->json(['message'=>'Not found.'],400); 
        }
    }  

    public function bookingPlaced(Request $request) {
        $validator = [   
            // 'user_id'       =>'required|min:2',
            // 'ecomm_puja_id' =>'required|min:1',
            // 'address_id'    =>'required|min:1',
            // 'payment_id'    =>'required|min:1',            
            // 'puja_type'     =>'required|min:1',
            // 'puja_category' =>'required|min:1',
            // 'price_order'   =>'required|min:1',
            'price_tax'     =>'required|min:1',
            'price_coupan'  =>'required|min:1',
            'price_total'   =>'required|min:1',
            // 'booking_type'  =>'required|min:1',
            // 'deliver_date'  =>'required|min:2',  
           
        ];
        $payment_id = rand()."".rand();
        $price_order        =  Session::get('price_order');
        $puja_category      =  Session::get('puja_category');
        $puja_type          =  Session::get('puja_type');
        $ecomm_puja_id      =  Session::get('ecomm_puja_id');
        $user =  $user =Auth::guard('user')->user(); 
        $userAddress = UserAddress::where('user_id',$user->id)->first();
        $address_id = $userAddress->id;
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }


        $user_id = $user->id; 
        $unique = uniqid();
        
        $bookingid ="AS". strtoupper($unique)."TR0".now()->timestamp;
        $userBooking = Booking::create([
            'user_id'           => $user_id,            
            'ecomm_puja_id'     => $ecomm_puja_id,
            'address_id'        => $address_id,
            'payment_id'        => $payment_id,
            'booking_id'        => $bookingid,
            'pandit_id'         => null,        
            'puja_type'         => $puja_type,
            'puja_category'     => $puja_category,
            'price_order'       => $price_order,
            'price_tax'         => $request->get('price_tax'),
            'price_coupan'      => $request->get('price_coupan'),
            'price_total'       => $request->get('price_total'),
            'booking_type'      => $request->get('booking_type'),
            'booking_active'    => 1,
            'booking_date'      => now()->timestamp,
            'deliver_date'      => $request->get('deliver_date'),
            'booking_status'    => 1,   
            
            
        ]);  
        return redirect('/dashboard');       
        return response()->json(['message'=>'Booking successfully.','data'=>$userBooking],200); 
    }

    public function updateProfileDetails(Request $request) {
        $validator = [          
            'firstName'     => 'required|min:2',
            'lastName'      =>'required|min:2',
            'email'         =>'required |email',
            'dob'           =>'required ',
            'birthTime'     =>'required|min:2',
            'birthPlace'    =>'required|min:2',
            'gender'        =>'required|min:1',
        ];
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        // dd($request->userDetail);
        $user_id = $request->userDetail->id;
        $dBoy=User::where('id',$user_id)->first();
        if($request->file('profile_image')){
            $file= $request->file('profile_image');
            // $filename= date('YmdHi')."-".$file->getClientOriginalName();
            $filename= date('YmdHi')."-user.".$file->extension();
            $file-> move(public_path('web/Image/user'), $filename);
            $dBoy->profile_image= $filename;
        }
         
        $dBoy->first_name=$request->firstName;                   
        $dBoy->last_name=$request->lastName;;                   
        $dBoy->email=$request->email;                   
        $dBoy->date_of_birth=$request->dob;                   
        $dBoy->birth_time=$request->birthTime;                   
        $dBoy->birth_place=$request->birthPlace;                    
        $dBoy->gender=$request->gender;                    
        $dBoy->save(); 
        $user = User::find($user_id);               
        return response()->json(['message'=>'Profile updated successfully.','data'=>$user],200); 
    }

    
}
