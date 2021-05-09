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


// API booking
//
Route::get('booking/index','Api\BookingController@index');
//
Route::post('/booking/show/{id}','Api\BookingController@show');
// 
Route::post('/booking/store', 'Api\BookingController@store');

Route::patch('/booking/update/{id}','Api\BookingController@update');
Route::delete('/booking/destroy/{id}','Api\BookingController@destroy');

Route::get('/booking/cancel-booking/{id}','Api\BookingController@cancel_booking');
Route::get('/booking/show-cancel-booking','Api\BookingController@show_cancel_booking');


// API Posts
Route::get('post/index','Api\PostController@index');
Route::post('post/store','Api\PostController@store');
Route::delete('post/destroy/{id}','Api\PostController@destroy');
Route::post('post/search','Api\PostController@search_post');

// API photographer, popular

Route::get('photographer/popular','Api\UserController@photographer_popular');
Route::get('photographer/recommendation','Api\UserController@photographer_recommendation');
Route::get('photographer/index','Api\UserController@photographer_total');

// API search photographer
Route::post('photographer/search','Api\UserController@search_photographer');

// API check voucher

Route::post('user/check_voucher','Api\VoucherController@check_value_voucher');


// API combo

Route::get('photographer/{id}/combo','Api\UserController@show_photographer_type');


// api customer
Route::get('customer/index','Api\UserController@customer_total');


// api ranking of photographer

Route::get('photographer/ranking/month/{month}','Api\UserController@ranking_photographer_perMonth');