<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\PanditApiController;
use App\Http\Controllers\SubscriberController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/documentations', function(){
    return view('vendor.l5-swagger.index');
});
Route::group(['namespace' => 'API'], function () {
    Route::get('home',[UserApiController::class,'home']);
    Route::post('send_mail',[UserApiController::class,'sendMailTem']);
    Route::post('send_sms',[UserApiController::class,'orderSMS']);
    // User API Routes
    
    Route::post('pandit/pandit_registration',[PanditApiController::class,'register']);
    Route::group(['prefix'=>'user'], function () {
        Route::post('/subscribe', [SubscriberController::class, 'subscribe']);
        Route::post('/send_otp', [UserApiController::class, 'sendNewOtp']);
        Route::Post('login',[UserApiController::class,'login']);
        Route::Post('otp_verify',[UserApiController::class,'otp_verify']);
        Route::get('list_of_language',[UserApiController::class,'list_of_language']);
        Route::get('list_of_expert',[UserApiController::class,'list_of_expert']);
        Route::group(['middleware' => 'jwt.verify'], function () {
            Route::Post('add_details',[UserApiController::class,'addDetails']);
            Route::Post('list_of_puja',[UserApiController::class,'list_of_puja']);
            Route::Post('puaja-details-byId',[UserApiController::class,'pujaDetails']);
            Route::Post('list_of_astro',[UserApiController::class,'list_of_astro']);
            Route::post('update_user_profile',[UserApiController::class,'updateProfileDetails']);
            Route::get('get_profile_info',[UserApiController::class,'getProfileDetails']);
            Route::get('address_get',[UserApiController::class,'getAddressDetails']);
            Route::post('address_add',[UserApiController::class,'addAddress']);
            Route::get('wallet_balance_get',[UserApiController::class,'getWalletDetails']);
            Route::post('wallet_balance_add',[UserApiController::class,'addWalletBalance']);
            Route::post('booking_placed',[UserApiController::class,'bookingPlaced']);
            Route::post('booking_placed_details',[UserApiController::class,'getBookingDetails']);
            Route::get('myorder',[UserApiController::class,'myorder']);
            Route::post('make_payment',[UserApiController::class,'makePayment']);
            Route::post('horroscope',[UserApiController::class,'horroscope']);

        });
    });
});
