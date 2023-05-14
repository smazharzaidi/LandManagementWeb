<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create',function(){
    return view('seller/create');
});

Route::get('/read',function(){
    return view('seller/read');
});

Route::get('/update',function(){
    return view('seller/update');
});

Route::get('/delete',function(){
    return view('seller/delete');
});

Route::get('/', function () {
    return view('welcome');
});
