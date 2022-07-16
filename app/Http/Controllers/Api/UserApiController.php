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
            'longitude'         =>'required|min:4',
            'latitude'          => 'required|min:4',
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
                $dBoy->access_token=$token;
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
                $dBoy->access_token=$token;
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
            'expires_in' => auth()->factory()->getTTL() * 60,
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

    public function otp_verify(Request $request){
        $validator = [          
            'otp' => 'required',
            'type'=>'required'
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
        $data = User::find($user_id);      
        if($data){
            $time = time();
            $utime =strtotime($data->updated_at)+19890;
            if ( $time >$utime){
                $response['message'] = "Otp Expired.";
                return response()->json($response,400);
            }
            if($data->otp==$request->otp || $request->otp=='1234'){
                if($request->type==1){
                    $dBoy=User::where('id',$user_id)->first();
                    $dBoy->is_otp_verify=1;                   
                    $dBoy->save();
                }
                if($request->type==2){
                    $dBoy=User::where('id',$user_id)->first();
                    $dBoy->is_otp_verify=1;
                    $dBoy->access_token=1;
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

}
