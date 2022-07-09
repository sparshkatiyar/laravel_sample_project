<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puja;
use App\Models\PujaEcommerce;

class PujaController extends Controller
{
    //
    public function index()
    {
        $pujaList = PujaEcommerce::orderBy("id", "desc")->get();              
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->id);
        }  
        return view('puja',compact('pujaList'));
    }
    public function booking(Request $request )
    {
        $pujaDetails = PujaEcommerce::find($request->id);  
        $pujaDetails->puja_id = Puja::find($pujaDetails->id);
        
        return view('puja-book',compact('pujaDetails'));
    }
    public function delivery()
    {
        return view('delivery');
    }
}
