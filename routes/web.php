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
Route::get('/puja-ghar', [App\Http\Controllers\PujaController::class, 'home'])->name('home');
Route::get('/puja-online', [App\Http\Controllers\PujaController::class, 'online'])->name('online');
Route::get('/puja-request', [App\Http\Controllers\PujaController::class, 'onrequest'])->name('request');
Route::get('/puja-booking/{id}', [App\Http\Controllers\PujaController::class, 'booking'])->name('booking');
Route::get('/puja-all', [App\Http\Controllers\PujaController::class, 'AllPooja'])->name('puja.all');
Route::get('/order-success', [App\Http\Controllers\UserController::class, 'order'])->name('order');


Route::get('/pandit-registration', [App\Http\Controllers\PanditController::class, 'index'])->name('index.pandit.registration');
Route::post('/pandit-registration', [App\Http\Controllers\PanditController::class, 'register'])->name('register');
Route::any('/panditskills', [App\Http\Controllers\PanditController::class, 'panditskills'])->name('panditskills');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/otp_verify', [App\Http\Controllers\UserController::class, 'otp_verify'])->name('otp_verify');
Route::get('/puja-delivery', [App\Http\Controllers\PujaController::class, 'delivery'])->name('delivery');
Route::post('/puja-delivery', [App\Http\Controllers\PujaController::class, 'deliveryProcced'])->name('deliveryProcced');
Route::post('/puja-delivery-login', [App\Http\Controllers\PujaController::class, 'deliveryProcced'])->name('deliveryForLogin');
Route::post('/edit-user-profile', [App\Http\Controllers\ProfileController::class, 'UpdateUserProfile'])->name('user.profile');
Route::post('horroscope',[UserApiController::class,'horroscope']);
Route::post('/onrequest-puja',[App\Http\Controllers\PujaRequestController::class,'create']);
Route::post('/payment-success', [App\Http\Controllers\WalletController::class, 'paymentSucsess'])->name('payment-success');
Route::get('/payment-failure', [App\Http\Controllers\WalletController::class, 'paymentFailure'])->name('payment-failure');
Route::post('/payment-capture', [App\Http\Controllers\WalletController::class, 'paymentCapture'])->name('payment-capture');
Route::group(['middleware' => 'user-auth'],function(){
	Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
	Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('index');
	Route::get('/address', [App\Http\Controllers\AddressController::class, 'index'])->name('index');
	Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');
	Route::get('/add_country', [App\Http\Controllers\ProfileController::class, 'add_country'])->name('add_country');
	Route::post('/save-address', [App\Http\Controllers\AddressController::class, 'addAddress'])->name('addAddress');
	Route::post('/add-balance', [App\Http\Controllers\WalletController::class, 'addWalletBalance'])->name('addWalletBalance');
	Route::post('/booking-placed', [App\Http\Controllers\UserController::class, 'bookingPlaced'])->name('addWalletBalance');
	
});

Route::group(['prefix' => '/admin-panel'],function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'signin'])->name('signin');
	Route::get('/signin',[App\Http\Controllers\Admin\HomeController::class,'signin']);
	Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
	Route::get('/logout',[App\Http\Controllers\Admin\HomeController::class,'logout']);
	Route::post('/validateLogin',[App\Http\Controllers\Admin\HomeController::class,'validateLogin']);
	
	
	Route::group(['middleware' => 'admin-auth'],function(){
		Route::get('/pooja-booking',[App\Http\Controllers\Admin\BookingMgmtController::class,'index']);
		Route::get('/assigned-pandit-pooja',[App\Http\Controllers\Admin\BookingMgmtController::class,'assigned']);
		Route::get('/user-list',[App\Http\Controllers\Admin\UserMgmtController::class,'index']);
		Route::post('/create',[App\Http\Controllers\Admin\HomeController::class,'create']);
		Route::get('/puja-list',[App\Http\Controllers\Admin\HomeController::class,'pujaList']);
		Route::get('/puja-list-ecommerce',[App\Http\Controllers\Admin\HomeController::class,'pujaListEm']);
		Route::get('/puja-creation',[App\Http\Controllers\Admin\HomeController::class,'pujaCreation']);
		Route::get('/puja-edit/{id}',[App\Http\Controllers\Admin\HomeController::class,'pujaEdit']);
		Route::post('/puja-edit',[App\Http\Controllers\Admin\HomeController::class,'pujaEditSave']);
		Route::post('/puja-creation',[App\Http\Controllers\Admin\PujaController::class,'pujaCreation']);
		Route::get('/puja-creation-ecommerce',[App\Http\Controllers\Admin\HomeController::class,'pujaCreationEm'])->name('pooja.price');
		Route::post('/puja-creation-ecommerce',[App\Http\Controllers\Admin\PujaController::class,'pujaCreationEm']);
		Route::get('/puja-edit-price/{id}',[App\Http\Controllers\Admin\PujaController::class,'pujaCreationedit'])->name('pooja.edit.price');
		Route::get('/puja-delete/{id}',[App\Http\Controllers\Admin\PujaController::class,'pujadelete'])->name('pooja.delete.price');
		Route::post('/assing-pandit',[App\Http\Controllers\Admin\BookingMgmtController::class,'assignPandit']);
		Route::get('/puja-category',[App\Http\Controllers\Admin\PujaController::class,'pujaCategory'])->name('pooja.category');
		Route::get('/puja-category-edit/{id}',[App\Http\Controllers\Admin\PujaController::class,'pujaCategoryedit'])->name('pooja.category.edit');
		Route::post('/puja-category',[App\Http\Controllers\Admin\PujaController::class,'pujaCategoryUpdate']);
		Route::get('/pandit-list',[App\Http\Controllers\Admin\PanditMgmtController::class,'index']);
		Route::get('/astrologer-list',[App\Http\Controllers\Admin\PanditMgmtController::class,'astro']);
		Route::get('/puja-request',[App\Http\Controllers\Admin\PujaController::class,'requestList'])->name('requestList');
		
	});

});


