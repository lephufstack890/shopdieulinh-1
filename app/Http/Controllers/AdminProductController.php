<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.addProduct');
    }

    public function listProduct(){
        return view('admin.product.listProduct');
    }

    public function catProduct(){
        return view('admin.product.catProduct');
    }
}
