<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodItemsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtpController;
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
Route::post('/otp', [AuthController::class, 'requestOtp']);
Route::post('verifyotp', [AuthController::class, 'verifyOtp']);
Route::post('/mobileotp', [AuthController::class, 'sendMobileOtp']);



Route::post('/faceSimilarity', [AuthController::class, 'PythonScript']);

Route::get('pay_by_stripe', [OrderController::class, 'payByStripe']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/addnewmenuitem', [FoodItemsController::class, 'index']);
    Route::get('/sellermenu', [FoodItemsController::class, 'SellerMenu']);
    Route::get('/AllMenu', [FoodItemsController::class, 'AllMenu']);
    Route::get('/chat', 'ChatsController@index');
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::post('messages', 'ChatsController@sendMessage');
    Route::get("/isLoggedIn", [AuthController::class, 'userInfo']);
});
