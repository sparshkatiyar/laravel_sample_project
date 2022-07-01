<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PujaController extends Controller
{
    //
    public function index()
    {
        return view('puja');
    }
    public function booking()
    {
        return view('puja-book');
    }
    public function delivery()
    {
        return view('delivery');
    }
}
