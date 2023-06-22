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

Auth::routes(['register' => true]);




// Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Web_Setting
    Route::resource('setting', 'WebSettingController', ['only' => 'index', 'edit', 'update']);

    // Orders
    Route::get('get-orders', 'OrdersController@getOrders')->name('orders.get');
    Route::resource('orders', 'OrdersController');

     // Invoices
     Route::resource('invoices', 'InvoicesController');

     // Contacts
    Route::get('get-contacts', 'ContactController@getContacts')->name('contacts.get');
    Route::resource('contacts', 'ContactController');


     // Customers
     Route::resource('customers', 'CustomersController');

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
    Route::get('/invoice', "OrderController@invoice")->name('invoice');


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



//Customer Routes
Route::group(['prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer', 'middleware' => [ 'auth', 'verified', 'customer']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    // Orders
    Route::resource('orders', 'OrdersController');

    // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Profile
    Route::resource('profile', 'ProfileController')->only(['index', 'update']);
    // Change
    Route::get('change-password', 'ProfileController@changePassword')->name('profile.change-password');
    Route::post('change-password', 'ProfileController@changePasswordUpdate')->name('profile.change-password.change');
});



