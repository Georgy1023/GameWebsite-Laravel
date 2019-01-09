<?php

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

Route::get('/', ['uses' => 'HomeController@Index', 'as' => 'homepage']);




Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/terms',function(){
    return view('terms');
});
Route::get('/download_guide',function(){
    return view('download_guide');
});
Route::get('/privacy',function(){
    return view('privacy');
});

Route::get('test',function(){
    return "This is test";
})->middleware('verified');
Route::post('paypal','PaymentController@payWithpaypal');
Route::get('status',['uses' => 'PaymentController@getPaymentStatus', 'as' => 'status']);
Route::get('subscribe','HomeController@subscribe');