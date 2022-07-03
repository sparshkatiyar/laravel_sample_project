<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puja;
use App\Models\PujaEcommerce;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pujaList = PujaEcommerce::all();
        foreach(@$pujaList as $pujas){
            $pujas->puja_id = Puja::find($pujas->id);
        }  
        // dd($pujaList);
        return view('index',compact('pujaList'));
    }
}
