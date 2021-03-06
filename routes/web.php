<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckStatus;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/login', 'pages.login')->middleware('UserAuth');

Route::post('/login', [UserController::class, 'login']);

Route::get('/login/del', [UserController::class, 'deleteSession']);

Route::get('/', [ProductController::class, 'index']);


