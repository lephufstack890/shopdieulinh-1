<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function addUser(){
        return view('admin.user.addUser');
    }

    public function listUser(){
        return view('admin.user.listUser');
    }
}
