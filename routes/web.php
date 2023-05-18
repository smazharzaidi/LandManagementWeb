<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\CityController;

Route::get('/create', [SellerController::class, 'create'])->name('seller.create');
Route::post('/store', [SellerController::class, 'store'])->name('seller.store');
Route::get('/read', [SellerController::class, 'read'])->name('seller.read');
Route::get('/update/{id}', [SellerController::class, 'edit'])->name('seller.edit');
Route::put('/update/{id}', [SellerController::class, 'update'])->name('seller.update');
Route::delete('/delete/{id}', [SellerController::class, 'destroy'])->name('seller.destroy');
Route::get('/confirmDelete/{id}', [SellerController::class, 'confirmDelete'])->name('seller.confirmDelete');


Route::get('land/create', [LandController::class, 'create'])->name('land.create');
Route::post('land/store', [LandController::class, 'store'])->name('land.store');
Route::get('/land/read', [LandController::class, 'index'])->name('land.index');
Route::get('land/{id}/edit', [LandController::class, 'edit'])->name('land.edit');
Route::put('land/{id}', [LandController::class, 'update'])->name('land.update');
Route::delete('land/{id}', [LandController::class, 'destroy'])->name('land.destroy');
Route::get('land/delete/{id}', [LandController::class, 'confirmDelete'])->name('land.confirmDelete');

Route::get('/', function () {
    return view('welcome');
});
