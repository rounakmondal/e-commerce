<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\sellerConotroller;
use App\Http\Controllers\userControler;




Route::get('/', function () {
    return view('user/welcome');
});

Route::get('/admin',[adminController::class,'admindashboard']);

Route::get('/adminlogin',[adminController::class,'adminlogin']);

Route::get('/sellers',[adminController::class,'sellers']);

Route::get('/customers',[adminController::class,'customers']);

Route::post('adminlogindata',[adminController::class,'adminlogindata'])->name('adminlogindata');



Route::get('productapproved/{id}',[adminController::class,'productapproved']);

Route::get('productdel/{id}',[adminController::class,'productdel']);

Route::get('adminproduct',[adminController::class,'adminproduct']);

Route::get('logout',[adminController::class,'logout'])->name('logout');

Route::get('sellreg',[sellerConotroller::class,'sellreg']);

Route::get('selllogin',[sellerConotroller::class,'selllogin']);

Route::get('selldashboard',[sellerConotroller::class,'selldashboard']);

Route::post('userlogindata',[sellerConotroller::class,'userlogindata'])->name('userlogindata');

Route::get('logoutseller',[sellerConotroller::class,'logoutseller']);

Route::post('selldata',[sellerConotroller::class,'selldata'])->name('selldata');

Route::post('/productup',[sellerConotroller::class,'productup'])->name('productup');

Route::post('userdata',[userControler::class,'userdata'])->name('userdata');

Route::post('userlogin',[userControler::class,'userlogin'])->name('userlogin');

Route::get('userlogout',[userControler::class,'userlogout']);

Route::get('allproduct',[userControler::class,'allproduct']);

Route::get('about',[userControler::class,'about']);

Route::get('cart',[userControler::class,'cart']);

Route::get('checkout',[userControler::class,'checkout']);

Route::get('contact',[userControler::class,'contact']);

Route::get('profile',[userControler::class,'profile']);

Route::post('userinfodata',[userControler::class,'userinfodata'])->name('userinfodata');

Route::get('addcart/{id}',[userControler::class,'addcart']);

Route::get('removecart/{id}',[userControler::class,'removecart']);

Route::get('product_single',[userControler::class,'product_single']);

Route::get('sellerprofile',[sellerConotroller::class,'sellerprofile']);



Route::post('sellerupdate',[sellerConotroller::class,'sellerupdate']);




