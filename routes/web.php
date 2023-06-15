<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);




// Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']],function () {
Route::get('/', 'HomeController@index')->name('home');

// Web_Setting
Route::resource('web-setting', 'WebSettingController',['only'=> 'index', 'edit', 'update']);

//Service
Route::resource('services','ServiceController');

//Blogs
Route::resource('blogs','BlogsController');




});

// Web routes
Route::group(['namespace'=> 'Web'], function(){
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/about-us' ,'PagesController@about')->name('about');

     //Order
     Route::get('/order' , 'OrderController@create')->name('order');
     Route::post('/order' , 'OrderController@store')->name('order.store');

     Route::post('/', 'PagesController@queryStore')->name('form.submit');

      // ContactController
    Route::get('/contact',    "ContactController@create")->name('contact');
    Route::post('/contact',   "ContactController@store")->name('contact.store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
