<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Str;
use App\Models\RecentHistory; 
use DB;
use JWTAuth;
use App\Models\User;
use App\Models\Language;
use App\Models\Experte;
use App\Models\PujaEcommerce;
use App\Models\Puja;
use App\Models\Pandit;
use App\Models\UserAddress;
use App\Models\Wallet;
use App\Models\Booking;
use App\Models\Payment;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserApiController extends Controller
{   
    
    public function __construct(UserService $service)
    {
        $this->service = $service;
        $this->successMessage = trans('messages.success.success');
    }

    public function home(){
        $response = "this is home page";
        $status = 200;
        return response()->json($response,$status);
    }

    public function  login(Request $request){
                  
        $validations = [                    
            'mobileTelCode'     => 'required|min:3',
            'mobileNumber'      => 'required|regex:/[0-9]{9}/',              
            'deviceToken'       => 'required|min:6',
            'deviceType'        => 'required|min:1',     
      
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

    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 600,
            'user' => auth()->user()
        ]);
    }

    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
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

    public function addAddress(Request $request) {
        $validator = [          
            'contact_name'      =>'required|min:2',
            'contact_no'        =>'required|min:2',
            'flat_no'           =>'required|min:2',
            'locality_no'       =>'required|min:2',
            'pincode'           =>'required|min:2',
            'address'           =>'required|min:2',
            'city'              =>'required|min:2',
            'state'             =>'required|min:2',
            'town'              =>'required|min:2',
        ];
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        $user_id = $request->userDetail->id; 
        $userAddress = UserAddress::create([
            'user_id'      => $user_id,
            'contact_name'      => $request->get('contact_name'),
            'contact_no'        => $request->get('contact_no'),
            'flat_no'           => $request->get('flat_no'),
            'locality_no'       => $request->get('locality_no'),
            'pincode'           => $request->get('pincode'),
            'address'           => $request->get('address'),
            'city'              => $request->get('address'),
            'state'             => $request->get('state'),
            'town'              => $request->get('town'),
        ]);  
                    
        return response()->json(['message'=>'Address added successfully.','data'=>$userAddress],200); 
    }

    public function addWalletBalance(Request $request) {
        $validator = [          
            'balance'               =>'required|min:2',
            'currency'              =>'required|min:2',
            'payment_id'            =>'required|min:2',
           
        ];
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        $user_id = $request->userDetail->id; 
        $userAddress = Wallet::create([
            'user_id'           => $user_id,
            'balance'           => $request->get('balance'),
            'currency'          => "INR",
            'is_active'         => 0,
            'is_blocked'        => 0,
            
        ]);  
                    
        return response()->json(['message'=>'Wallet balance added successfully.','data'=>$userAddress],200); 
    }

    public function makePayment(Request $request) {
        $validator = [     
            
            'amount' =>'required|min:2',       
            'currency' =>'required|min:2',
            'mode' =>'required|min:1',
            'type' =>'required|min:1',
            'mihpayid' =>'required|min:2',
            // 'payment_source' =>'required|min:2',  
        ];
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        $user_id = $request->userDetail->id;
        $unique =  uniqid();
        
        $taxn ="TXN". strtoupper($unique)."TR0".now()->timestamp;
        $userAddress = Payment::create([
            'user_id'           => $user_id,
            'amount'           => $request->get('amount'),
            'currency'          => "INR",
            'mode'              => $request->get('mode'),
            'type'              => $request->get('type'),            
            'txn_id'            => $taxn,            
            'mihpayid'          => $request->get('mihpayid'),            
            'payment_source'    => "Payu",            
        ]);  
                    
        return response()->json(['message'=>'Transaction added successfully.','data'=>$userAddress],200); 
    }

    public function bookingPlaced(Request $request) {
        $validator = [   
            // 'user_id'       =>'required|min:2',
            'ecomm_puja_id' =>'required|min:1',
            'address_id'    =>'required|min:1',
            'payment_id'    =>'required|min:1',
            // 'booking_id'    =>'required|min:1',
            // 'pandit_id'     =>'required|min:2',
            'puja_type'     =>'required|min:1',
            'puja_category' =>'required|min:1',
            'price_order'   =>'required|min:1',
            'price_tax'     =>'required|min:1',
            'price_coupan'  =>'required|min:1',
            'price_total'   =>'required|min:1',
            'booking_type'  =>'required|min:1',
            'deliver_date'  =>'required|min:2',
            // 'booking_date'  =>'required|min:2',
            // 'booking_status'=>'required|min:2',       
                         
          
           
        ];
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        $user_id = $request->userDetail->id; 
        $unique = uniqid();
        
        $bookingid ="AS". strtoupper($unique)."TR0".now()->timestamp;
        $userBooking = Booking::create([
            'user_id'           => $user_id,            
            'ecomm_puja_id'     => $request->get('ecomm_puja_id'),
            'address_id'        => $request->get('address_id'),
            'payment_id'        => $request->get('payment_id'),
            'booking_id'        => $bookingid,
            'pandit_id'         => null,        
            'puja_type'         => $request->get('puja_type'),
            'puja_category'     => $request->get('puja_category'),
            'price_order'       => $request->get('price_order'),
            'price_tax'         => $request->get('price_tax'),
            'price_coupan'      => $request->get('price_coupan'),
            'price_total'       => $request->get('price_total'),
            'booking_type'      => $request->get('booking_type'),
            'booking_active'    => 1,
            'booking_date'      => now()->timestamp,
            'deliver_date'      => $request->get('deliver_date'),
            'booking_status'    => 1,   
            
            
        ]);  
                    
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

    public function getProfileDetails(Request $request) {
      
        $user_id = $request->userDetail->id;        
        $user = User::find($user_id);               
        return response()->json(['message'=>'Fetch profile details successfully.','data'=>$user],200); 
    }
    public function getAddressDetails(Request $request) {
      
        $user_id = $request->userDetail->id;        
        $user = UserAddress::where('user_id',$user_id)->first();               
        return response()->json(['message'=>'Fetch address details successfully.','data'=>$user],200); 
    }
    public function getWalletDetails(Request $request) {
      
        $user_id = $request->userDetail->id;        
        $user = Wallet::where('user_id',$user_id)->first();               
        return response()->json(['message'=>'Fetch address details successfully.','data'=>$user],200); 
    }

    public function getBookingDetails(Request $request) {
      
        $user_id = $request->userDetail->id;        
        // $user = Booking::where('user_id',$user_id)->first();               
        $user = Booking::find($request->placed_id);               
        return response()->json(['message'=>'Fetch booking details successfully.','data'=>$user],200); 
    }
    public function pujaDetails(Request $request) {
      
    
        // $pujaDetails = PujaEcommerce::find($request->epuja_id);
        $pujaDetailsall = Puja::leftjoin('puja_ecommerces','pujas.id','puja_ecommerces.puja_id')->leftjoin('puja_categories','pujas.id','puja_categories.pooja_id')->select('pujas.*','puja_ecommerces.puja_base_price','puja_ecommerces.puja_samagri_price','puja_ecommerces.puja_wsamagri_price','puja_ecommerces.puja_price_samall','puja_ecommerces.puja_price_medium','puja_ecommerces.puja_price_large','puja_ecommerces.puja_price_all','puja_categories.standard_pooja','puja_categories.premium_pooja','puja_categories.grand_pooja','puja_categories.category_samagri','puja_categories.category_wsamagri','puja_categories.category_all','puja_categories.premium_category_samagri','puja_categories.premium_category_wsamagri','puja_categories.premium_category_all','puja_categories.grand_category_samagri','puja_categories.grand_category_wsamagri','puja_categories.grand_category_all',)->find($request->epuja_id);

        
       
            // $pujaDetails->puja_id = Puja::find(@$pujaDetails->puja_id);
           
                   
        return response()->json(['message'=>'Fetch booking details successfully.','data'=>$pujaDetailsall],200); 
    }
    public function myorder(Request $request) {
      
        $user_id = $request->userDetail->id;        
        $user['user_details'] = Wallet::where('user_id',$user_id)->first();               
        $user['my_puja'] =null;               
        $user['my_astroshop'] =null;               
        $user['my_chat'] =null;               
        $user['my_call_audio'] =null;               
        $user['my_call_video'] =null;               
        return response()->json(['message'=>'Fetch myorder details successfully.','data'=>$user],200); 
    }

    public function otp_verify(Request $request){
        $validator = [          
            'otp' => 'required',
            'type'=>'required',
            'mobileNumber'=>'required',
            'mobileTelCode'=>'required',
        ];
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
        if($data){
            $time = time();
            $utime =strtotime($data->updated_at)+19890;
            // if ( $time >$utime){
            //     $response['message'] = "Otp Expired.";
            //     return response()->json($response,400);
            // }
            if($data->otp==$request->otp || $request->otp=='1234'){
                try {
                    if (!$token = JWTAuth::fromUser($data)) {
                        return response()->json(['error' => 'invalid_credentials'], 400);
                    }
                } catch (JWTException $e) {
                    return response()->json(['error' => 'could_not_create_token'], 500);
                }
                if($request->type==1){
                    $dBoy=User::where('id',$user_id)->first();
                    $dBoy->access_token=$token;
                    $dBoy->is_otp_verify=1;                   
                    $dBoy->save();
                }
                if($request->type==2){
                    $dBoy=User::where('id',$user_id)->first();
                    $dBoy->is_otp_verify=1;
                    $dBoy->access_token=$token;
                    $dBoy->save();                    
                }
                
                $user = User::find($user_id);               
                return response()->json(['message'=>'OTP verified successfully.','data'=>$user],200); 

            }else{
                return response()->json(['message'=>'Invalid OTP'],400); 
            }
        } else{
            return response()->json(['message'=>'Not found.'],400); 
        }
    }  

    public function list_of_puja(Request $request){
        $list = PujaEcommerce::select('id','puja_base_price','puja_id')->orderBy("id", "desc")->get();
        foreach(@$list as $pujas){
            $pujas->puja_id = Puja::select('name','image')->where('id', $pujas->puja_id)->first();
        }  
        return response()->json(['message'=>' Puja list .','data'=>$list],200);
    }

    public function list_of_astro(Request $request){
        $list = Pandit::select('name','pandit_pic', 'gender','skill_primary','skill_secondry','experties','charge_chat','charge_call','charge_video')->get();
        foreach($list as $ratingData){
            $ratingData->avg_rating=4.5;
            $ratingData->exp=5;
            $ratingData->skill_primary=json_decode($ratingData->skill_primary);
            $ratingData->skill_secondry=json_decode($ratingData->skill_secondry);
        }
        // $list = Pandit::all();
        return response()->json(['message'=>' Astro list .','data'=>$list],200);
    }

    public function list_of_expert(Request $request){
        $list = Experte::all();
        return response()->json(['message'=>' Experties list .','data'=>$list],200);
        
    }

    public function list_of_language(Request $request){
        $list = Language::all();
        return response()->json(['message'=>' Experties list .','data'=>$list],200);
    }

    public function sendNewOtp(Request $request){
        $otp =rand(1000,9999);
        $result =$this->sendOtp($otp,$request->mobile_number,$request->country_code);
        if($result['status']==1){
        
            return response()->json(['message'=>'Successfully registered','data'=>$result],200);
        
        }else{
            return response()->json(['message'=>'Mobile number invalid!'],400); 
        }
        // return response()->json(['message'=>' Experties list .'],200);
    }

    public function horroscope(Request $request){
        $validator = [          
            'sign' => 'required',
            'day'=>'required'
        ];
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }
        $sign=$request->sign;
        $day=$request->day;
        $aztro = curl_init('https://aztro.sameerkumar.website/?sign='.$sign.'&day='.$day);
        curl_setopt_array($aztro, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));
        $response = curl_exec($aztro);
        if($response === FALSE){
            die(curl_error($aztro));
        }
        $responseData = json_decode($response, TRUE);
        return response()->json(['UserHorroscope'=>$responseData],200);
    }
    
    public function sendMailTem(Request $request){
        // $validator = [          
        //     'email' => 'required',            
        // ];
        // $validation = Validator::make($request->all(),$validator);
        // if($validation->fails()){
        //     $response   =[
        //         'message'   => $validation->errors($validation)->first(),
        //     ];
        //     return response()->json($response,400);
        // }

        // $email =  $request->email;
        // $subject="Pooja Booking Confirm";
        // $details='<!DOCTYPE html>
        // <html>
        // <body>
        // <p>Dear User your Pooja booking confirmed Successfully.</p>
        // <p>Pooja Booking Details are- </p>
        // <p>Pooja Name - Navratri Kalash Sthapana</p>
        // <p>Booking Date - 01-09-2022 </p>
        // <p>Pooja Date and Time -03-09-2022 10:00 AM </p>
        // <p>Pooja Price -1000 Rs. </p>
        // <p>Thanks and Regards</p>
        // <p>Astro Pandit</p>
        // </body>
        // </html>';
        $mailReulst = $this->sendMail($email,$subject,$details);
        return response()->json(['data'=>"mail sent"],200);
        
    }
}

