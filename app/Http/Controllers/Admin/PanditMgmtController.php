<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pandit;

class PanditMgmtController extends Controller
{
    //
    public function index(){
        $panditList = Pandit::orderBy('id', 'DESC')->paginate(5);
        return view('admin/pandit-list' ,compact('panditList'));
    }
    public function astro(){
        $panditList = Pandit::orderBy('id', 'DESC')->paginate(5);
        return view('admin/astrologer-list' ,compact('panditList'));
    }
}
