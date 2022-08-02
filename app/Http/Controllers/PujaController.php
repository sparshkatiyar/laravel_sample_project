<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puja;
use App\Models\PujaEcommerce;
use Auth;

class PujaController extends Controller
{
    //
    public function index()
    {
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->puja_id);
        }  
      
        return view('puja',compact('pujaList'));
    }
    public function booking(Request $request )
    {
        $pujaDetails = PujaEcommerce::find($request->id);  
        $pujaDetails->puja_id = Puja::find($pujaDetails->puja_id);
        
        return view('puja-book',compact('pujaDetails'));
    }
    public function delivery()
    {
        
        $user =Auth::guard('user')->user(); 
        // dd($user);          
        return view('delivery',compact('user'));
    }
    
}
