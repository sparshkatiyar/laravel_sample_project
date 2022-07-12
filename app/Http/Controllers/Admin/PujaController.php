<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Puja;
use App\Models\PujaEcommerce;
use Validator;
use Hash;
use Illuminate\Support\Facades\Input;


class PujaController extends Controller
{
    //
    public function pujaCreation(Request $request){
        $validations            =  array(
            'pujaname'          => 'required',
            'pujatype'          => 'required',
            'pujacategory'      => 'required',
            'pujaadvantage'     => 'required',
            'pujadescription'   => 'required',
            'pujasimplified'    => 'required',
            
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }
        
        $puja = new Puja();
        if($request->file('pujaimage')){
            $file= $request->file('pujaimage');
            // $filename= date('YmdHi')."-".$file->getClientOriginalName();
            $filename= date('YmdHi')."-puja.".$file->extension();
            $file-> move(public_path('web/Image'), $filename);
            $puja->image= $filename;
        }
        $puja->name = $request->get('pujaname');
        $puja->type = $request->get('pujatype');      
        $puja->category = $request->get('pujacategory');
        $puja->advantage = $request->get('pujaadvantage');
        $puja->desc = $request->get('pujadescription');
        $puja->pujasimplified = $request->get('pujasimplified');
        $puja->save();
        return redirect('admin-panel/puja-list');
    }

    public function pujaCreationEm(Request $request){
        $validations                =  array(
            'pujanameId'            => 'required',
            'baseprice'             => 'required',
            'samagriprice'          => 'required',
            'wsamagriprice'         => 'required',
            'samallpujaprice'       => 'required',
            'mediumpujaprice'       => 'required',
            'largepujaprice'        => 'required',
            'allpujaprice'          => 'required',
            
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }   
        $puja = new PujaEcommerce();

        $puja->puja_id              = $request->get('pujanameId');
        $puja->puja_base_price      = $request->get('baseprice'); 
        $puja->puja_samagri_price   = $request->get('samagriprice');  
        $puja->puja_wsamagri_price   = $request->get('wsamagriprice');  
        $puja->puja_price_samall    = $request->get('samallpujaprice');
        $puja->puja_price_medium    = $request->get('mediumpujaprice');
        $puja->puja_price_large     = $request->get('largepujaprice');
        $puja->puja_price_all       = $request->get('allpujaprice');
        $puja->save();
        return redirect('admin-panel/puja-list-ecommerce');
    }
}
