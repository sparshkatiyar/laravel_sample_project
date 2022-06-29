<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/puja-home', [App\Http\Controllers\PujaController::class, 'index'])->name('index');
Route::group(['prefix' => '/admin-panel'],function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'signin'])->name('signin');
    Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
	Route::get('/logout',[App\Http\Controllers\Admin\HomeController::class,'logout']);
	Route::get('/signin',[App\Http\Controllers\Admin\HomeController::class,'signin']);
	Route::post('/validateLogin',[App\Http\Controllers\Admin\HomeController::class,'validateLogin']);

});


