<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/produit/{title}', [ProductController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/yowl', function () {
    return view('yowl');
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
Route::get('/annonce', [\App\Http\Controllers\AdController::class, 'create'])->name('rdgavis');
Route::post('/annonce/create', [\App\Http\Controllers\AdController::class, 'store'])->name('ad.store'); 



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

