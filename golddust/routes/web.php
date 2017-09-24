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
//THIS IS FOR TESTING ONLY
// use Illuminate\Support\Facades\Redis;

Auth::routes();

//default route
//Route::get('/home', 'HomeController@index')->name('home');


// PUBLIC ROUTES

Route::get('/', function () {
    return view('welcome');
});

ROUTE::get('/profile', 'UserController@profile')->name('profile');


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
Route::get('/b/tests', 'UserController@businesstests')->name('businesstests');

// MESSENGER ROUTES

Route::post('/messenger/send', 'MessagesController@create');
Route::post('/messenger/update', 'MessagesController@update');
Route::post('/messenger/delete', 'MessagesController@delete');


// FORM TESTING ROUTES
Route::post('/create/test', 'TestsController@store');
Route::post('/create/project', 'ProjectsController@store');
Route::post('/create/teams', 'TeamsController@store');
Route::post('/create/proposals', 'ProposalsController@store');

// OBJECT VIEW ROUTES
Route::get('/projects/{projects}', 'ProjectsController@show')->name('view_project');
Route::get('/f/proposal/{proposals}', 'ProposalsController@showf')->name('f_view_proposal');
Route::get('/b/proposal/{proposals}', 'ProposalsController@showb')->name('b_view_proposal');

// TESTING ROUTES
Route::get('/test', function () {
  return view('test.test');
});

Route::get('/fire', function () {
  // this fires the event
  // 1. Publish event with Redis
    // $data = [
    //     'event' => 'UserSignedUp',
    //     'data' => [
    //         'username' => 'JohnDoe'
    //     ]
    // ];
    // 2. Node.js + Redis subscribes to the event = sock.js
    // Redis::publish('test-channel', json_encode($data));
    // event(new App\Events\EventName($data));
    event(new App\Events\EventName());
    return "event fired";
});

// TEST FORM ROUTES

Route::get('/createProject', function () {
  return view('test.createProject');
});

Route::get('/createTeam', function () {
  return view('test.createTeam');
});

Route::get('/createTest', function () {
  return view('test.createTest');
});