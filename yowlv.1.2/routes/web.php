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


Route::get('/edit', function () {
    return view('edit');
});

Route::get('/profiles/{user}', 'ProfileController@show')->name('profiles.show');
Route::get('/profiles/{user}/edit', 'ProfileController@edit')->name('profiles.edit');
Route::patch ('/profiles/{user}', 'ProfileController@update')->name('profiles.update');












Auth::routes();


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/annonce', [\App\Http\Controllers\AdController::class, 'create'])->name('ad.create');
Route::post('/annonce/create', [\App\Http\Controllers\AdController::class, 'store'])->name('ad.store');

Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');









Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
