<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserMgmtController extends Controller
{
    public function index(){
        $userList = User::all();
        return view('admin/user-list' ,compact('userList'));
    }
}
