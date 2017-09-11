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
Route::get('/messenger', 'UserController@messenger')->name('messenger');
Route::get('/proposals', 'UserController@proposals')->name('proposals');
Route::get('/tasks', 'UserController@tasks')->name('tasks');
Route::get('/stats', 'UserController@stats')->name('stats');


// MESSENGER ROUTES

Route::post('/messenger/send', 'MessagesController@create');
Route::post('/messenger/update', 'MessagesController@update');
Route::post('/messenger/delete', 'MessagesController@delete');
