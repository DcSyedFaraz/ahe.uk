<?php

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
    return view('welcome');
});


Route::group(['namespace'=> 'Web'], function(){
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/about-us' ,'PagesController@about')->name('about');

     //Order
     Route::get('/order' , 'OrderController@create')->name('order');
     Route::post('/order' , 'OrderController@store')->name('order.store');
     
     Route::post('/', 'PagesController@queryStore')->name('form.submit');
});
