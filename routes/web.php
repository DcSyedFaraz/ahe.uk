<?php

use App\Service;
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
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/admin', 'HomeController@index')->name('home');

    // Web_Setting
    Route::resource('web-setting', 'WebSettingController', ['only' => 'index', 'edit', 'update']);

    //Service
    Route::post('services/slug', 'ServiceController@getSlug')->name('services.getSlug');
    Route::resource('services', 'ServiceController');

    //Blogs
    Route::post('blogs/slug', 'BlogsController@getSlug')->name('blogs.getSlug');
    Route::resource('blogs', 'BlogsController');
});

// Web routes
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/about-us', 'PagesController@about')->name('about');

    //Order
    Route::get('/order', 'OrderController@create')->name('order');
    Route::post('/order', 'OrderController@store')->name('order.store');

    Route::post('/', 'PagesController@queryStore')->name('form.submit');

    // ContactController
    Route::get('/contact',    "ContactController@create")->name('contact');
    Route::post('/contact',   "ContactController@store")->name('contact.store');

    // Blogs
    Route::get('/blogs', 'BlogsController@create')->name('blog');
    Route::get('/blogs/{slug}', 'BlogsController@show')->name('blogs.show');
    // Service
    Route::get('/{slug}', 'ServiceController@show')->name('service.show');
});



