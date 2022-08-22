<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserMgmtController extends Controller
{
    public function index(){
        $userList = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin/user-list' ,compact('userList'));
    }
}
