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



// FREELANCER DASHBOARD ROUTES
// change user controller to freelancer controller eventually

Route::get('/f/dashboard', 'UserController@dashboard')->name('dashboard');
Route::get('/messenger', 'UserController@messenger')->name('messenger');
Route::get('/f/proposals', 'UserController@proposals')->name('proposals');
Route::get('/f/tasks', 'UserController@tasks')->name('tasks');
Route::get('/f/stats', 'UserController@stats')->name('stats');
Route::get('/f/account', 'UserController@account')->name('account');

// BUSINESS DASHBOARD ROUTES
// change user controller to business controller eventually

Route::get('/b/dashboard', 'UserController@businessdash')->name('businessdash');
Route::get('/b/messenger', 'UserController@businessmessenger')->name('businessmessenger');
Route::get('/b/projects', 'UserController@businessprojects')->name('businessprojects');
Route::get('/b/teams', 'UserController@businessteams')->name('businessteams');

// MESSENGER ROUTES

Route::post('/messenger/send', 'MessagesController@create');
Route::post('/messenger/update', 'MessagesController@update');
Route::post('/messenger/delete', 'MessagesController@delete');


// TESTING ROUTES
ROUTE::get('/test', function () {
  return view('test.test');
});

ROUTE::get('/fire', function () {
  // this fires the event
    event(new App\Events\EventName());
    return "event fired";
});
