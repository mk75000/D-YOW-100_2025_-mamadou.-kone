<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/yowl', [ProductController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});



Route::get('/ctg', function () {
    return view('ctg');
});


Route::get('/rdgavis', function () {
    return view('rdgavis');
});


Route::get('/contact', function () {
    return view('contact');
});








Auth::routes();


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/annonce', [\App\Http\Controllers\AdController::class, 'create'])->name('ad.create');
Route::post('/annonce/create', [\App\Http\Controllers\AdController::class, 'store'])->name('ad.store'); 




