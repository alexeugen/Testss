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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::post('/admin/annualcheck', 'AdminController@annualCheck')->name('sendAnnualCheck');
    Route::post('/admin/toparents', 'AdminController@toParents')->name('sendToParents');

    Route::post('/delete-notification', 'HomeController@deleteNotification')->name('deleteNotification');
    
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/articol', function () {
        return view('articol');
    });
    Route::get('/doctor', function () {
        return view('doctor');
    });
});
