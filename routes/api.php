<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\VoucherController;
use App\Http\Controllers\Api\RevenueController;

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
Route::get('customer/show/register/month/{month}','Api\UserController@customer_register_by_month');
Route::get('photographer/show/register/month/{month}','Api\UserController@photographer_register_by_month');


// API booking
//
Route::get('booking/index','Api\BookingController@index');
Route::get('booking/show/{id}','Api\BookingController@show_booking');

// api show history booking cua photographer
Route::get('booking/show/photographer/{id_photographer}','Api\BookingController@show_booking_photographer');


// api show history booking cua customer
Route::get('booking/show/customer/{id_customer}','Api\BookingController@show_booking_customer');

// 
Route::post('/booking/store', 'Api\BookingController@store');
Route::put('/booking/update/{id}','Api\BookingController@update_status');
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
// lấy ra hết các combo của một photographer //
Route::get('photographer/combo/{id}','Api\UserController@show_photographer_type');


// api customer
Route::get('customer/index','Api\UserController@customer_total');


// api ranking of photographer

Route::get('photographer/ranking/month/{month}','Api\UserController@ranking_photographer_perMonth');


// api create new voucher

Route::post('voucher/new','Api\VoucherController@create_voucher');
Route::get('voucher','Api\VoucherController@show_all_voucher');


// api get revenue by month
Route::get('revenue/month/{id}','Api\RevenueController@total_revenue_by_month');


// show all user
Route::get('user/index','Api\UserController@show_user');



//push noti
Route::post('notification','Api\BookingController@pushNotificationByTopic');