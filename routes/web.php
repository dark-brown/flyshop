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


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/cart', 'HomeController@cart');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->role == 0)
        {
            return redirect('/admin-dashboard');
        }
        else if(Auth::user()->role == 1)
        {
            return redirect('/delivery-dashboard');
        }
        else if(Auth::user()->role == 2)
        {
            return redirect('/customer-dashboard');
        }
    });

    Route::get('/setting', function () {
        if(Auth::user()->role == 0)
        {
            return redirect('/admin-setting');
        }
        else if(Auth::user()->role == 1)
        {
            return redirect('/delivery-setting');
        }
        else if(Auth::user()->role == 2)
        {
            return redirect('/customer-setting');
        }
    });
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['admin']], function () {

    Route::group(['namespace'=>'Admin'], function () {
        Route::get('/admin-dashboard', 'DashboardController@index');
        Route::get('/admin-setting', 'SettingController@index');
    });
});

/*
|--------------------------------------------------------------------------
| Delivery Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['delivery']], function () {

    Route::group(['namespace'=>'Delivery'], function () {
        Route::get('/delivery-dashboard', 'DashboardController@index');
        Route::get('/delivery-setting', 'SettingController@index');
    });
});

/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['customer']], function () {

    Route::group(['namespace'=>'Customer'], function () {
        Route::get('/customer-dashboard', 'DashboardController@index');
        Route::get('/customer-setting', 'SettingController@index');
    });
});