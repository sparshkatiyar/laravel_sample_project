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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/puja-home', [App\Http\Controllers\PujaController::class, 'index'])->name('index');
Route::get('/puja-booking/{id}', [App\Http\Controllers\PujaController::class, 'booking'])->name('booking');
Route::get('/puja-delivery', [App\Http\Controllers\PujaController::class, 'delivery'])->name('delivery');
Route::get('/pandit-registration', [App\Http\Controllers\PanditController::class, 'index'])->name('index');
Route::post('/pandit-registration', [App\Http\Controllers\PanditController::class, 'register'])->name('register');
Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('index');
Route::get('/address', [App\Http\Controllers\AddressController::class, 'index'])->name('index');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');
Route::group(['prefix' => '/admin-panel'],function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'signin'])->name('signin');
    Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
	Route::get('/logout',[App\Http\Controllers\Admin\HomeController::class,'logout']);
	Route::get('/signin',[App\Http\Controllers\Admin\HomeController::class,'signin']);
	Route::get('/puja-list',[App\Http\Controllers\Admin\HomeController::class,'pujaList']);
	Route::get('/puja-list-ecommerce',[App\Http\Controllers\Admin\HomeController::class,'pujaListEm']);
	Route::get('/puja-creation',[App\Http\Controllers\Admin\HomeController::class,'pujaCreation']);
	Route::post('/puja-creation',[App\Http\Controllers\Admin\PujaController::class,'pujaCreation']);
	Route::get('/puja-creation-ecommerce',[App\Http\Controllers\Admin\HomeController::class,'pujaCreationEm']);
	Route::post('/puja-creation-ecommerce',[App\Http\Controllers\Admin\PujaController::class,'pujaCreationEm']);
	Route::get('/pandit-list',[App\Http\Controllers\Admin\PanditMgmtController::class,'index']);
	Route::get('/pooja-booking',[App\Http\Controllers\Admin\BookingMgmtController::class,'index']);
	Route::get('/user-list',[App\Http\Controllers\Admin\UserMgmtController::class,'index']);
	Route::post('/validateLogin',[App\Http\Controllers\Admin\HomeController::class,'validateLogin']);
	Route::post('/create',[App\Http\Controllers\Admin\HomeController::class,'create']);
	Route::post('/assing-pandit',[App\Http\Controllers\Admin\BookingMgmtController::class,'assignPandit']);

});


