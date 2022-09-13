<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Wallet;
use Illuminate\Support\Facades\Validator;
use Session;

class WalletController extends Controller
{
    //
    public function index()
    {   
        
        $user_id =  $user =Auth::guard('user')->user(); 
        // $user_id = $request->userDetail->id;        
        $bal = Wallet::where('user_id',$user_id->id)->first();     
        // dd($bal);
        return view('wallet',compact('bal'));
    }

    public function addWalletBalance(Request $request) {
        $validator = [          
            'balance'               =>'required|min:2',
            'currency'              =>'required|min:2',
            'payment_id'            =>'required|min:2',
           
        ];
        // dd($request->all());
        $validation = Validator::make($request->all(),$validator);
        if($validation->fails()){
            $response   =[
                'message'   => $validation->errors($validation)->first(),
            ];
            return response()->json($response,400);
        }

        $user_id =  $user =Auth::guard('user')->user();      
        $bal = Wallet::where('user_id',$user_id->id)->first(); 
        if($bal){
            return view('wallet',compact('bal'));
        }else{

            $userAddress = Wallet::create([
                'user_id'           => $user_id->id,
                'balance'           => $request->get('balance'),
                'currency'          => "INR",
                'is_active'         => 0,
                'is_blocked'        => 0,
                
            ]);  
            $bal = Wallet::where('user_id',$user_id->id)->first(); 
            return view('wallet',compact('bal')); 
        }
        
        // dd($bal);
              
        // return response()->json(['message'=>'Wallet balance added successfully.','data'=>$userAddress],200); 
    }

    public function paymentSucsess(Request $request){
        dd($request->all());

    }

    public function paymentFailure(Request $request){
        dd($request->all());

    }
    public function paymentCapture(Request $request){
        Session::put('delivery_date', $request->delivery_date);
        Session::put('delivery_time', $request->delivery_time);
        Session::put('finalprice', $request->finalprice);
        $auth_user =Auth::guard('user')->user();
        $name = $auth_user->first_name?$auth_user->first_name:"Astro User";
      
        $phone = $auth_user->mobile_number;
        $amount = round($request->finalprice);
        $email = $auth_user->email?$auth_user->email:"astropanditom@gmail.com";
     
        return view('paycapture',compact('name','phone','email','amount')); 
    }
}
