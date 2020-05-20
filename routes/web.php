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
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['admin']], function () {

    Route::group(['namespace'=>'Admin'], function () {
        Route::get('/admin-dashboard', 'DashboardController@index');
        
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
        
    });
});