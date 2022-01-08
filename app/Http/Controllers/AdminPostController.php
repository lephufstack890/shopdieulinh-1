<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function addPost(){
        return view('admin.post.addPost');
    }

    public function listPost(){
        return view('admin.post.listPost');
    }

    public function catPost(){
        return view('admin.post.catPost');
    }
}
