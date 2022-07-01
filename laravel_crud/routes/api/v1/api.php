<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\v1\LoginController;
use App\Http\Controllers\Api\v1\RegisterController;

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


// Users
Route::prefix('/user')->group(function(){
    Route::post('/login', 'api\v1\LoginController@login');
    Route::post('/register', 'api\v1\RegisterController@register');
});

Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [PassportAuthController::class, 'userInfo']);

Route::resource('/post', 'api\v1\PostController@post');
});