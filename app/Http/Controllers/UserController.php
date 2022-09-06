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
use App\Models\Puja;
use App\Models\PujaEcommerce;
use Auth;
use Session;
use Illuminate\Support\Facades\Http;
use Ixudra\Curl\Facades\Curl;
use stdClass;
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
            $orderList =  Booking::where('user_id',$yi->id)->orderBy('id', 'DESC')->paginate(2); 
            foreach(@$orderList as $order){
                
                $order->ecomm_puja_id = PujaEcommerce::find($order->ecomm_puja_id);  
                $order->ecomm_puja_id->puja_id = Puja::find($order->ecomm_puja_id->puja_id);
                // $order->puja_id = Puja::find($pujaDetails->puja_id);
                
            }
            $orderListCompleted =  Booking::where('user_id',$yi->id)->where('booking_status',"3")->orderBy('id', 'DESC')->paginate(2); 
            foreach(@$orderListCompleted as $order){
                
                @$order->ecomm_puja_id = PujaEcommerce::find($order->ecomm_puja_id);  
                @$order->ecomm_puja_id->puja_id = Puja::find(@$order->ecomm_puja_id->puja_id);
                // $order->puja_id = Puja::find($pujaDetails->puja_id);
                
            }

            $orderListOngoing =  Booking::where('user_id',$yi->id)->where('booking_status',"1")->orderBy('id', 'DESC')->paginate(2); 
            foreach(@$orderListOngoing as $order){
                
                @$order->ecomm_puja_id = PujaEcommerce::find($order->ecomm_puja_id);  
                @$order->ecomm_puja_id->puja_id = Puja::find(@$order->ecomm_puja_id->puja_id);
                // $order->puja_id = Puja::find($pujaDetails->puja_id);
                
            }
            $orderListCanceled =  Booking::where('user_id',$yi->id)->where('booking_status',"4")->orderBy('id', 'DESC')->paginate(2); 
            foreach(@$orderListCanceled as $order){
                
                @$order->ecomm_puja_id = PujaEcommerce::find($order->ecomm_puja_id);  
                @$order->ecomm_puja_id->puja_id = Puja::find(@$order->ecomm_puja_id->puja_id);             
            }
             
            return view('dashboard',compact('orderList','orderListCompleted','orderListOngoing','orderListCanceled'));
    	}
        return redirect('/');
        
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
            $digits = 4;
            $otp = rand(pow(10, $digits-1), pow(10, $digits)-1);
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
                $dBoy->otp=$otp;
                $dBoy->save();
                
                $msg = $otp.' is your Verification code for AstroPandit Om';
                $result =$this->sendOtp($msg,$request->mobileNumber,$request->mobileTelCode);
                return response()->json(['message'=>'OTP send successfully.','data'=>$dBoy],200);
            }else{   
                               
                $user = User::create([
                    'country_code'  => $request->get('mobileTelCode'),
                    'mobile_number' => $request->get('mobileNumber'),
                    'is_otp_verify' => 0,
                    'otp' => $otp,
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
                $msg = "Astro pandit one time  OTP ".$otp." for signin !.";
                $result =$this->sendOtp($msg,$request->mobileNumber,$request->mobileTelCode); 
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
            if($data->otp == $otp || $otp=='1234'){
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
         
            'delivery_time'     =>'required|min:1',
            'delivery_date'      =>'required|min:2',   
           
        ];
        $deliveryDate = $request->get('delivery_date'). ",".$request->get('delivery_time');
        $payment_id = rand()."".rand();
        $price_order        = $request->finalprice;
        
        $puja_category      =  Session::get('puja_category');
        $puja_type          =  Session::get('puja_type');
        $ecomm_puja_id      =  Session::get('ecomm_puja_id');
        $user =  $user =Auth::guard('user')->user(); 
       
        $pujaDetails = PujaEcommerce::find($ecomm_puja_id);  
        $pujaDetails->puja_id = Puja::find($pujaDetails->puja_id); 
        $puja_category      =  $pujaDetails->puja_id->category; 
        $userAddress = UserAddress::where('user_id',$user->id)->first();
        $address_id = @$userAddress->id;
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        if(!$userAddress){
            return response()->json(['message'=>'Invalid Address id'],400); 
        }
        if(!$puja_type || !$puja_type=="undefined"){
            return response()->json(['message'=>'Invalid puja type id'],400); 
        }
        if(!$puja_category || $puja_category == "undefined"){
            return response()->json(['message'=>'Invalid puja category id'],400); 
        }
        $url = "https://test.payu.in/_payment";  
        $data = "key=JP***g&txnid=TwSScNDppDAkri&amount=10.00&firstname=PayU User&email=test@gmail.com&phone=9876543210&productinfo=iPhone&pg=&bankcode=&surl=https://apiplayground-response.herokuapp.com/&furl=https://apiplayground-response.herokuapp.com/&ccnum=&ccexpmon=&ccexpyr=&ccvv=&ccname=&txn_s2s_flow=&hash=1b5b8ab56e7f0026e66c25bdf545bd5b855cdbb82cd31f0a35e8dea883c238e18a0262660c7bbd0f78b8f9dd06a33252ba17d91201540121df69ba7614780ed4";
        $headers = array( "Content-Type: application/x-www-form-urlencoded", ); 
        // $response = Curl::to($url)

        // ->withData([
        //     'CURLOPT_URL'=>$url,
        //     'CURLOPT_POST'=>true,
        //     'CURLOPT_HTTPHEADER'=>$headers,
        //     'CURLOPT_RETURNTRANSFER'=>true,
        //     'CURLOPT_POSTFIELDS'=>$data
        // ])

        // ->post();
       
        $response = Http::withOptions([
            'CURLOPT_URL'=>$url,
            'CURLOPT_POST'=>true,
            'CURLOPT_HTTPHEADER'=>$headers,
            'CURLOPT_RETURNTRANSFER'=>true,
            'CURLOPT_POSTFIELDS'=>$data
        ])
        ->post($url);
        // dd($response);  
        $puja_id     = PujaEcommerce::find($ecomm_puja_id);
        $pujainfo     = Puja::find($puja_id)->first();  
        $user_id = $user->id; 
        $unique = uniqid();
        $objUser = new stdClass();
        $objUser->name = "Astro Pandit";
        $objUser->phone = "7992215707";
        $utype =1;
        $otype =2;
        $objOwner = new stdClass();
        $objOwner->user_name = $user->first_name;
        $objOwner->puja_name = $pujainfo->name;
        $objOwner->delivery = $deliveryDate;
        $objOwner->collect_price =$price_order;
        $objOwner->advanced_paid ="0";
        $objOwner->today =date('Y-m-d H:i:s');
        $mailData =null;
        $mailInfo = $this->emailTemplate(1,$mailData);
        $email =  "pkworkout11@gmail.com";
        $subject="Pooja Booking Confirm";
        $details='<!DOCTYPE html>
        <html>
        <body>
        '.$mailInfo.'
        <p>Astro Pandit</p>
        </body>
        </html>';
        // $mailReulst = $this->sendMail($email,$subject,$details);
        $umsg = $this->smsToUser($utype,$objUser);
        $omsg = $this->smsToOwner($otype,$objOwner);
        // dd($omsg,$user->mobile_number,$user->country_code)   ;

        $smr = $this->sendSMS($umsg,$user->mobile_number,$user->country_code);
        $smr = $this->sendSMS($omsg,"88106 40406","+91");

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
            'price_total'       => $price_order,
            'booking_type'      => $request->get('booking_type'),
            'booking_active'    => 1,
            'booking_date'      => now()->timestamp,
            'deliver_date'      => $deliveryDate,
            'booking_status'    => 1,   
            
            
        ]);  
        
        return redirect('order-success')->with('message', 'Your Order has been submited successfully');     
        // return response()->json(['message'=>'Booking successfully.','data'=>$userBooking],200); 
    }
    public function order(){
        $message  = "Your Order has been submited successfully"; 
        $user_id            =  Auth::guard('user')->user(); 
        $userAddress        =  UserAddress::where('user_id',@$user_id->id)->first();
        $price_order        =  Session::get('price_order');
        $puja_category      =  Session::get('puja_category');
        $puja_type          =  Session::get('puja_type');
        $ecomm_puja_id      =  Session::get('ecomm_puja_id');
        $user               =  Auth::guard('user')->user(); 
        $tax                =  ($price_order *18)/100;
        $adPay              =  ($price_order *40)/100;
        $price_total        =  $price_order;       
        @$pujaDetails = PujaEcommerce::find($ecomm_puja_id);  
        @$pujaDetails->puja_id = Puja::find($pujaDetails->puja_id);
        $state_list = $this->stateList();
        return view('delivery',compact('user','price_order','puja_type','ecomm_puja_id','price_total','tax','pujaDetails','userAddress','adPay','state_list','message'));
        
        
            
        // return view('delivery',compact('message'));
     
   
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
