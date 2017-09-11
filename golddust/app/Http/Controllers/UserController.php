<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Messages;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('users.dashboard');
    }

    public function messenger()
    {
	// THIS CODE IS TEMPORARY UNTIL I HAVE A FUNCTIONAL PRODUCT
	$s = auth()->user()->sentMessages;
	$r = auth()->user()->recievedMessages;
	$m = array_merge(json_decode($s, true), json_decode($r, true));

	//var_dump(strtotime($m[0]["created_at"]) - strtotime($m[1]["created_at"]));

// awesome function usort, dont quite understand it gotta look it up when i get the chance
// orders by most recent to oldest
usort($m, function($a1, $a2) {
   $v1 = strtotime($a1['created_at']);
   $v2 = strtotime($a2['created_at']);
   return $v2 - $v1; // $v1 - $v2 to reverse direction
});

/*
$dis = [];

foreach($m as $n) {
$mes = json_decode(Messages::find($n['id'])->author, true);
if ($n['author_id'] !== $auth()->id()) {
array_push();
} else {
array_push();
}
var_dump($mes);
}
*/

//dd(json_decode($s, true), json_decode($r, true));
//	dd($m);

	// USE ROUTE MODEL BINDING TO COMPACT USER MESSAGES
	return view('users.messenger');
    }

    public function proposals()
    {
	return view('users.proposals');
    }

    public function stats()
    {
	return view('users.stats');
    }

    public function tasks()
    {
	return view('users.tasks');
    }
}
