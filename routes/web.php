<?php

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


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    /* USERS MANAGEMENT ROUTES */
    Route::get('/user-management', [App\Http\Controllers\HomeController::class, 'userManagementIndex'])->name('user-management');
    Route::controller(AuthController::class)->prefix('user')->group(function () {
        Route::get('/list', 'getUsersList');
    });
});
