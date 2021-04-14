<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\VoucherController;

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


/// 
Route::post('/user/register','Api\UserController@user_register');
Route::post('/photographer/register','Api\UserController@photographer_register');

Route::post('/login','Api\UserController@login');
Route::get('/info','Api\UserController@userInfo')->middleware('auth:api');


/// API booking
Route::get('booking/index','Api\BookingController@index')->middleware('auth:api');
Route::get('/booking/show/{id}','Api\BookingController@show')->middleware('auth:api');
Route::post('/booking/store', 'Api\BookingController@store');
Route::patch('/booking/update/{id}','Api\BookingController@update')->middleware('auth:api');
Route::delete('booking/destroy/{id}','Api\BookingController@destroy')->middleware('auth:api');
Route::get('/booking/cancel-booking/{id}','Api\BookingController@cancel_booking')->middleware('auth:api');
Route::get('/booking/show-cancel-booking','Api\BookingController@show_cancel_booking')->middleware('auth:api');


// API Posts
Route::get('post/index','Api\PostController@index')->middleware('auth:api');
Route::post('post/store','Api\PostController@store')->middleware('auth:api');
Route::delete('post/destroy/{id}','Api\PostController@destroy')->middleware('auth:api');
Route::post('post/search','Api\PostController@search_post')->middleware('auth:api');

// API photographer, popular

Route::get('photographer/popular','Api\UserController@photographer_popular')->middleware('auth:api');
Route::get('photographer/recommendation','Api\UserController@photographer_recommendation')->middleware('auth:api');

// API search photographer
Route::post('photographer/search','Api\UserController@search_photographer')->middleware('auth:api');

// API check voucher

Route::post('user/check_voucher','Api\VoucherController@check_value_voucher')->middleware('auth:api');
