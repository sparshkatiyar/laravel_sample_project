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
            
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }

        $puja = new Puja();

        $puja->name = $request->get('pujaname');
        $puja->type = $request->get('pujatype');
        $puja->image = Hash::make($request->get('pujaimage'));
        $puja->category = $request->get('pujacategory');
        $puja->advantage = $request->get('pujaadvantage');
        $puja->desc = $request->get('pujadescription');
        $puja->save();
        return redirect('admin-panel/puja-list');
    }

    public function pujaCreationEm(Request $request){
        $validations            =  array(
            'pujanameId'        => 'required',
            'pujatype'          => 'required',
            'pujacategory'      => 'required',
            'baseprice'         => 'required',
            'price'             => 'required',
            
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }
        // dd($request->all());
        $puja = new PujaEcommerce();

        $puja->puja_id = $request->get('pujanameId');
        $puja->baseprice = $request->get('baseprice'); 
        $puja->type = $request->get('pujatype');  
        $puja->category = $request->get('pujacategory');
        $puja->price = $request->get('price');
        $puja->save();
        return redirect('admin-panel/puja-list');
    }
}
