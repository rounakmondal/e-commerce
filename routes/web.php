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

Route::post('adminlogindata',[adminController::class,'adminlogindata'])->name('adminlogindata');

Route::get('logout',[adminController::class,'logout'])->name('logout');

Route::get('sellreg',[sellerConotroller::class,'sellreg']);

Route::get('selllogin',[sellerConotroller::class,'selllogin']);

Route::get('selldashboard',[sellerConotroller::class,'selldashboard']);

Route::post('userlogindata',[sellerConotroller::class,'userlogindata'])->name('userlogindata');

Route::get('logoutseller',[sellerConotroller::class,'logoutseller']);

Route::post('selldata',[sellerConotroller::class,'selldata'])->name('selldata');

Route::post('userdata',[userControler::class,'userdata'])->name('userdata');

Route::post('userlogin',[userControler::class,'userlogin'])->name('userlogin');

Route::get('userlogout',[userControler::class,'userlogout']);