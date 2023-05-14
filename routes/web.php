<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandController;

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

Route::get('/create', function () {
    return view('seller/create');
});

Route::get('/read', function () {
    return view('seller/read');
});

Route::get('/update', function () {
    return view('seller/update');
});

Route::get('/delete', function () {
    return view('seller/delete');
});

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
