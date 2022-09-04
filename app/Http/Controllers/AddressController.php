<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Auth;

class AddressController extends Controller
{
    //
    public function index()
    {
        $user_id =  $user =Auth::guard('user')->user(); 
        $state_list =  $this->stateList();
        $userAddress = UserAddress::where('user_id',$user_id->id)->first();
        // dd($userAddress);
        return view('address',compact('userAddress','state_list')); 
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

        // dd($request->all());
        $user_id =  $user =Auth::guard('user')->user(); 
        $userAddress = UserAddress::where('user_id',$user_id->id)->first();
        // dd($userAddress,$request->all());
        // $otpUser = User::where('mobile_number',$request->mobileNumber)->first();
        if($userAddress){
            $userAddress->contact_name =$request->get('contact_name');
            $userAddress->contact_no =$request->get('contact_no');
            $userAddress->flat_no = $request->get('flat_no');
            $userAddress->locality_no= $request->get('locality_no');
            $userAddress->pincode=$request->get('pincode');
            $userAddress->address=$request->get('address');
            $userAddress->state=$request->get('state');
            $userAddress->city=$request->get('city');
            $userAddress->town=$request->get('town');
            if($userAddress->save()){

                return redirect()->back()->with('success','updated successfully');
            }
            // return view('address',compact('userAddress')); 
        }else{

            $userAddress = UserAddress::create([
                'user_id'           => $user_id->id,
                'contact_name'      => $request->get('contact_name'),
                'contact_no'        => $request->get('contact_no'),
                'flat_no'           => $request->get('flat_no'),
                'locality_no'       => $request->get('locality_no'),
                'pincode'           => $request->get('pincode'),
                'address'           => $request->get('address'),
                'city'              => $request->get('city'),
                'state'             => $request->get('state'),
                'town'              => $request->get('town'),
            ]);  
            return redirect()->back()->with('success','updated successfully');
            // return view('address',compact('userAddress'));    
        }
        // return response()->json(['message'=>'Address added successfully.','data'=>$userAddress],200); 
    }
}

