<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Messages;
use App\Conversations;



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
	//$s = auth()->user()->sentMessages;
	//$r = auth()->user()->recievedMessages;
	//$m = array_merge(json_decode($s, true), json_decode($r, true));

	//var_dump(strtotime($m[0]["created_at"]) - strtotime($m[1]["created_at"]));

// awesome function usort, dont quite understand it gotta look it up when i get the chance
// orders by most recent to oldest
/*
usort($m, function($a1, $a2) {
   $v1 = strtotime($a1['created_at']);
   $v2 = strtotime($a2['created_at']);
   return $v2 - $v1; // $v1 - $v2 to reverse direction
});
*/

/*
$dis = [];
$k = 0;
$c = 0;
foreach($m as $n) {

if ($n['author_id'] !== auth()->id() && $n['author_id'] !== $c) {
$mes = json_decode(Messages::find($n['id'])->author, true);
array_push($dis, $mes);
$c = $['author_id'];
}

if ($n['user_id'] !== auth()->id() && $n['user_id'] !== $c) {
$mes = json_decode(Messages::find($n['id'])->sent, true);
array_push($dis, $mes);
$c = $n['user_id'];
}
//var_dump($mes);

}

*/

//dd($dis);


//dd(json_decode($s, true), json_decode($r, true));
//	dd($m);

	$a = Conversations::where('user_one', '=', auth()->id())
	->orWhere( 'user_two', '=', auth()->id() )->get();
	$b = json_decode($a, true);
	//var_dump($a[1]->messages);
	//dd($a[0]->messages);
	//$c = array();
	for($i = 0; $i < count($a); $i++) {

	// TRY ORDERBY FUNCTION ON MESSAGES
	$d = json_decode($a[$i]->messages, true);
//	dd($d);
	usort($d, function($a1, $a2) {
   		$v1 = strtotime($a1['created_at']);
   		$v2 = strtotime($a2['created_at']);
   		return $v2 - $v1; // $v1 - $v2 to reverse direction
	});
//	$b[$i]['messages'] = [];
	$b[$i]['messages'] = $d;
	//var_dump($d);
	}

usort($b, function($a1, $a2) {
   $v1 = strtotime($a1['messages'][0]['created_at']);
   $v2 = strtotime($a2['messages'][0]['created_at']);
   return $v2 - $v1; // $v1 - $v2 to reverse direction
});

for($i=0; $i<count($b); $i++) {
//$b[$i]['user'] = [];
$u;
if ($b[$i]['user_one'] !== auth()->id()) {
$u = json_decode(User::select('name', 'id')->find($b[$i]['user_one']), true);
}
if ($b[$i]['user_two'] !== auth()->id()) {
$u = json_decode(User::select('id', 'name')->find($b[$i]['user_two']), true);
}
$b[$i]['user'] = $u;
}
$data = $b;
//dd($b);
	return view('users.messenger', compact('data'));
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
	
		public function account()
		{
			return view('users.account');
		}
	
	
		// BUSINESS CONTROLLER ROUTES
	public function businessdash() 
	{
		return view('business.dashboard');
	}
	
	public function projects()
	{
		return view('business.projects');
	}
}
