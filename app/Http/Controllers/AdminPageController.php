<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function addPage(){
        return view('admin.page.addPage');
    }

    public function listPage(){
        return view('admin.page.listPage');
    }
}
