<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;

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
    // User API Routes
    Route::group(['prefix'=>'user'], function () {
        Route::Post('login',[UserApiController::class,'login']);
        Route::Post('otp_verify',[UserApiController::class,'otp_verify']);
        Route::group(['middleware' => 'jwt.verify'], function () {
            Route::Post('add_details',[UserApiController::class,'addDetails']);

        });
    });
});
