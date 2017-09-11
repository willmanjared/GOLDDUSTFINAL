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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//default route
//Route::get('/home', 'HomeController@index')->name('home');



// USER DASHBOARD ROUTES

Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
