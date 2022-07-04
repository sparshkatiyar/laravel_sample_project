<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pandit;

class PanditMgmtController extends Controller
{
    //
    public function index(){
        $panditList = Pandit::all();
        return view('admin/pandit-list' ,compact('panditList'));
    }
}
