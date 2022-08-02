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

class UserController extends Controller
{
    //
    public function index()
    {   
         
        return view('dashboard');
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

    public function otp_verify(Request $request){
        $validator = [          
            'otp' => 'required',
            // 'type'=>'required',
            'mobileNumber'=>'required',
            'mobileTelCode'=>'required',
        ];
        // dd($request);
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
}
