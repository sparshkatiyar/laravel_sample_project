<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puja;
use App\Models\PujaEcommerce;
use App\Models\UserAddress;
use App\Models\PujaCategory;
use Auth;
use Cookie;
use Session;

class PujaController extends Controller
{
    //
    public function index()
    {
    
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        }  
        // dd($pujaList);
        return view('puja',compact('pujaList'));
    }
    public function booking(Request $request )
    {
        $ecomm_puja_id = $request->id;
        $pujaDetails = PujaEcommerce::find($request->id);  
        $pujaDetails->puja_id = Puja::find($pujaDetails->puja_id);
        $category_samagri = PujaCategory::where('pooja_id',$ecomm_puja_id)->get()->first();
        
        // dd($pujaDetails);
        return view('puja-book',compact('pujaDetails','ecomm_puja_id','category_samagri'));
    }
    public function delivery(Request $request)
    {
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
        $pujaDetails = PujaEcommerce::find($ecomm_puja_id);  
        $pujaDetails->puja_id = Puja::find($pujaDetails->puja_id);  
        return view('delivery',compact('user','price_order','puja_type','ecomm_puja_id','price_total','tax','pujaDetails','userAddress','adPay'));
    }
    public function deliveryForLogin(Request $request)
    {
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
        $pujaDetails = PujaEcommerce::find($ecomm_puja_id);  
        $pujaDetails->puja_id = Puja::find($pujaDetails->puja_id);  
   
        return view('delivery',compact('user','price_order','puja_type','ecomm_puja_id','price_total','tax','pujaDetails','userAddress','adPay'));
    }

    public function deliveryProcced(Request $request)   {
       
        Session::put('price_order', $request->price_order);
        Session::put('puja_category', $request->puja_category);
        Session::put('puja_type', $request->puja_type);
        Session::put('ecomm_puja_id', $request->ecomm_puja_id);
 
        $user =Auth::guard('user')->user(); 
        return response()->json(['message'=>' added successfully.','data'=>$user],200);    

    }
    
}
