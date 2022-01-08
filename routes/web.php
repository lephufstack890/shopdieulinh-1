<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('auth/login');
// });

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return view('admin/dashboard');
    });
    Route::get('/account',function(){
        return view('admin.account');
    });
    // Trang
    Route::get('/addPage','AdminPageController@addPage');
    Route::get('/listPage','AdminPageController@listPage');
    // Bài viết
    Route::get('/addPost','AdminPostController@addPost');
    Route::get('/listPost','AdminPostController@listPost');
    Route::get('/catPost','AdminPostController@catPost');
    // Sản phẩm
    Route::get('/addProduct','AdminProductController@addProduct');
    Route::get('/listProduct','AdminProductController@listProduct');
    Route::get('/catProduct','AdminProductController@catProduct');
    // Đơn hàng
    Route::get('/listOrder','AdminOrderController@listOrder');
    // Thành viên
    Route::get('/addUser','AdminUserController@addUser');
    Route::get('/listUser','AdminUserController@listUser');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
    return view('client/index');
});
Route::get('/product', function(){
    return view('client/product');
});
Route::get('/page', function(){
    return view('client/page');
});
Route::get('/contact', function(){
    return view('client/contact');
});
Route::get('/collaction', function(){
    return view('client/collaction');
});
Route::get('/about', function(){
    return view('client/about');
});
Route::get('/policy', function(){
    return view('client/policy');
});
Route::get('/cart', function(){
    return view('client/cart');
});