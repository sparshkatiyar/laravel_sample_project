<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pandit;
use Validator;

class PanditApiController extends Controller
{
    //
    public function register(Request $request){

        // dd($request->all());
        $validations            =  array(
            'pandit_pic'        => 'required',
            'name'              => 'required',
            'email'             => 'required',
            'gender'            => 'required',
            'dob'               => 'required',
            'reg_as'            => 'required',
            'skill_primary'     => 'required',
            'skill_secondry'    => 'required',
            'consult_time'      => 'required',
            'other_platform'    => 'required',
            'app_or_website'    => 'required',
            'uid_number'        => 'required',
            'uid_image'         => 'required',
            'experties'         => 'required',
            'charge_chat'       => 'required',
            'charge_call'       => 'required',
            'charge_video'      => 'required',
            'is_term'           => 'required',
            
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        } 


        $pandit = new Pandit();
        if($request->file('pandit_pic')){
            $file= $request->file('pandit_pic');
            // $filename= date('YmdHi')."-".$file->getClientOriginalName();
            $filename= date('YmdHi')."-puja.".$file->extension();
            $file-> move(public_path('web/Image/pandit'), $filename);
            $pandit->pandit_pic= $filename;
        }
        if($request->file('uid_image')){
            $file= $request->file('uid_image');
            // $filename= date('YmdHi')."-".$file->getClientOriginalName();
            $filenameu= date('YmdHi')."-puja.".$file->extension();
            $file-> move(public_path('web/Image/pandit'), $filenameu);
            $pandit->uid_image= $filenameu;
        }
        // $pandit->pandit_pic     = "profile_pic.jpg" /*$request->get('pandit_pic')*/;
        $pandit->name           = $request->get('name');
        $pandit->email          = $request->get('email'); 
        $pandit->gender         = $request->get('gender');  
        $pandit->dob            = $request->get('dob');
        $pandit->reg_as         = $request->get('reg_as');
        $pandit->skill_primary  = $request->get('skill_primary');
        $pandit->skill_secondry = $request->get('skill_secondry');
        $pandit->consult_time   = $request->get('consult_time');
        $pandit->other_platform = $request->get('other_platform');
        $pandit->app_or_website = $request->get('app_or_website');
        $pandit->uid_number     = $request->get('uid_number');
        // $pandit->uid_image      = "uid_image.jpg" /*$request->get('uid_image')*/;
        $pandit->experties      = $request->get('experties');
        $pandit->charge_chat    = $request->get('charge_chat');
        $pandit->charge_call    = $request->get('charge_call');
        $pandit->charge_video   = $request->get('charge_video');
        $pandit->is_term        = $request->get('is_term');
        $pandit->is_verify      = 0;
        $pandit->is_block       = 0;
        $pandit->save();
        if($pandit){

            return response()->json(['message'=>' Registration successfull .','data'=>$pandit],200);
        }else{
            return response()->json(['message'=>'Something went wrong'],400); 
        }
    }
}
