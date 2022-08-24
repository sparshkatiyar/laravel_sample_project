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
    public function home()
    {
    
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        }  

       
        return view('puja-ghar',compact('pujaList'));
    }
    public function online()
    {
    
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        }  
        // dd($pujaList);
        return view('puja-online',compact('pujaList'));
    }

    public function onrequest()
    {
    
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        }  
        // dd($pujaList);
        return view('puja-request',compact('pujaList'));
    }
    
    public function booking(Request $request )
    {
        $ecomm_puja_id = $request->id;
        $pujaDetails = PujaEcommerce::find($request->id);
        $poojaid=PujaEcommerce::where('id',$request->id)->first();
        $pujaDetails->puja_id = Puja::find($poojaid->puja_id);
        $category_samagri = PujaCategory::where('pooja_id',$poojaid->puja_id)->first();
        $pujaList = PujaEcommerce::orderBy("id", "desc")->paginate(6);              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        } 
        // dd($category_samagri);
        return view('puja-book',compact('pujaDetails','ecomm_puja_id','category_samagri','pujaList'));
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
        @$pujaDetails = PujaEcommerce::find($ecomm_puja_id);  
        @$pujaDetails->puja_id = Puja::find($pujaDetails->puja_id);  
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

    public function AllPooja()
    {
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        } 
        return view('all_pooja',compact('pujaList'));
    }

    public function GhrPooja()
    {
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        } 
        return view('gharpuja',compact('pujaList'));
    }

    public function OnlinePooja()
    {
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        } 
        return view('online_pooja',compact('pujaList'));
    }

    public function RequestPooja()
    {
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        } 
        return view('request_pooja',compact('pujaList'));
    }
    
}
