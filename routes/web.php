<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
    return view('auth.login');
});

Auth::routes();
// Auth::routes();

// Route::get('/', 'ChatsController@index');
// Route::get('messages', 'ChatsController@fetchMessages');
// Route::post('messages', 'ChatsController@sendMessage');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    /* USERS MANAGEMENT ROUTES */
    Route::get('/user-management', [App\Http\Controllers\HomeController::class, 'userManagementIndex'])->name('user-management');
    Route::get('/shop-management', [App\Http\Controllers\HomeController::class, 'shopManagementIndex'])->name('shop-management');
    Route::controller(AdminController::class)->prefix('user')->group(function () {
        Route::get('/list', 'getUsersList');
    });
    Route::controller(AdminController::class)->prefix('store')->group(function () {
        Route::get('/list', 'getStoreList');
        Route::get('/active/{store_id}', 'activeStore');
    });
});
