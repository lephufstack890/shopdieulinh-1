<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function listOrder(){
        return view('admin.order.listOrder');
    }
}
