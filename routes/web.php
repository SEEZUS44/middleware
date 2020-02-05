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

Route::auth();
Auth::routes();

Route::get('/', function () {

    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/user/roles', ['middleware' => ['role', 'auth', 'web'], function () {
    
    return "Middleware Role";
}]);
//how middleware work

Route::get('/admin', 'AdminController@index')->name('admin');

// Route::get('xannman', 'AdminController@index');