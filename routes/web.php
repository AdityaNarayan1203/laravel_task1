<?php

use App\Http\Controllers\MyAuthController;
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

Route::get('/', [MyAuthController::class, 'register'])->middleware('login_auth');
Route::get('login', [MyAuthController::class, 'login'])->middleware('login_auth');
Route::post('register_save', [MyAuthController::class, 'register_save']);

Route::post('login_check', [MyAuthController::class, 'login_check']);
Route::get('profile', [MyAuthController::class, 'profile'])->middleware('without_login');
Route::get('logout', [MyAuthController::class, 'logout']);
