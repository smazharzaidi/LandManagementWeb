<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\LandController;

Route::get('/seller/create', [SellerController::class, 'create'])->name('seller.create');
Route::post('/seller/store', [SellerController::class, 'store'])->name('seller.store');
Route::get('/seller/read', [SellerController::class, 'read'])->name('seller.read');
Route::get('/seller/update/{id}', [SellerController::class, 'edit'])->name('seller.edit');
Route::put('/seller/update/{id}', [SellerController::class, 'update'])->name('seller.update');
Route::delete('/seller/delete/{id}', [SellerController::class, 'destroy'])->name('seller.destroy');
Route::get('/seller/confirmDelete/{id}', [SellerController::class, 'confirmDelete'])->name('seller.confirmDelete');

Route::get('/land/create', [LandController::class, 'create'])->name('land.create');
Route::post('/land/store', [LandController::class, 'store'])->name('land.store');
Route::get('/land/read', [LandController::class, 'index'])->name('land.index');
Route::get('/land/edit/{id}', [LandController::class, 'edit'])->name('land.edit');
Route::delete('/land/delete/{id}', [LandController::class, 'destroy'])->name('land.destroy');
Route::get('/land/confirmDelete/{id}', [LandController::class, 'confirmDelete'])->name('land.confirmDelete');
Route::get('/land/select_seller_form', [LandController::class, 'selectSellerForm'])->name('land.select_seller_form');
Route::get('/land/select_seller', [LandController::class, 'getSellerLands'])->name('land.select_seller');
Route::get('/land/get_seller_lands', [LandController::class, 'getSellerLands'])->name('land.getSellerLands');
Route::get('/land/confirm-delete/{id}', [LandController::class, 'confirmDelete'])->name('land.confirmDelete');
Route::put('/land/update/{id}', [LandController::class, 'update'])->name('land.update');

Route::get('/', function () {
    return view('welcome');
});
