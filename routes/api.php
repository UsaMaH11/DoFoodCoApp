<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodItemsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\idAnalyzerController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/signup', [AuthController::class, 'sign_up']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/faceSimilarity', [AuthController::class, 'PythonScript']);

Route::post('/idCheck', [idAnalyzerController::class, 'idAnalyzer']);
Route::post('/checkBackground', [idAnalyzerController::class, 'backgroundCheck']);
Route::get('pay-by-stripe', [OrderController::class, 'payByStripe']);
Route::get('add-to-cart/{product_id}', [OrderController::class, 'addToCart']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/addnewmenuitem', [FoodItemsController::class, 'index']);
    Route::get('/sellermenu', [FoodItemsController::class, 'SellerMenu']);
    Route::get('/AllMenu', [FoodItemsController::class, 'AllMenu']);
    Route::get('/chat', 'ChatsController@index');
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::post('messages', 'ChatsController@sendMessage');
    Route::get("/isLoggedIn", [AuthController::class, 'userInfo']);
    Route::post("/updateUserInfo", [AuthController::class, 'updateUserInfo']);

    Route::post('/otp', [AuthController::class, 'requestOtp']);
    Route::post('verifyotp', [AuthController::class, 'verifyOtp']);
    Route::post('/mobileotp', [AuthController::class, 'sendMobileOtp']);
    Route::post('/verifymobileotp', [AuthController::class, 'verifyMobileOtp']);

    Route::post('/request-open-store', [AdminController::class, 'requestOpenStore']);

});
