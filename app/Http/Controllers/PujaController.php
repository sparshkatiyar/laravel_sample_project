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
        // $obj =null;
        // $type =1;
        // $msg = $this->smsToUser($type,$obj);
        // $smr = $this->sendSMS($msg,"7992215707","+91");
        // dd($smr);
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
        $state_list = $this->stateList();
        $MERCHANT_KEY = "HBxc80";
        $SALT = "yauHLEFqtr8L4KD4eeqEWpP0YHccAGS4";
        $txnidn="astro_".rand()."".rand();
        $name="pk";
        $email="pkworkout@gmail.com";
        $amount=100;
        $phone="7992215707";
        $surl="http://localhost/cake/my_app_name/view/sucess";
        $furl="http://localhost/cake/my_app_name/view/failure";
        $productInfo="xyzabc";

        // Merchant Salt as provided by Payu

        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hashString=$MERCHANT_KEY."|".$txnidn."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
        $hash = strtolower(hash('sha512', $hashString));
        // dd($hash);
        return view('delivery',compact('user','price_order','puja_type','ecomm_puja_id','price_total','tax','pujaDetails','userAddress','adPay','state_list', 'MERCHANT_KEY','SALT','txnidn','name','email','amount','surl','furl'));
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
