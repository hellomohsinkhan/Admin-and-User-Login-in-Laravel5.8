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
//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
	Route::post('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');
	Route::get('admin/home','HomeController@index')->name('admin.home');
});




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
