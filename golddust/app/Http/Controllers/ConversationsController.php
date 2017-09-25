<?php

namespace App\Http\Controllers;

use App\Conversations;
use App\User;
use App\Messages;
use Illuminate\Http\Request;

class ConversationsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conversations  $conversations
     * @return \Illuminate\Http\Response
     */
    public function show($c)
    {
     
      
        $a = Conversations::where([
          ['user_one', auth()->id()],
          ['user_two', $c]
        ])
        ->orWhere([
          ['user_two', auth()->id()],
          ['user_one', $c]
                  ])->get();
      
        $b = json_decode($a, true);
	//var_dump($a[1]->messages);
	//dd($a[0]->messages);
	//$c = array();
	$data = array();
	if(count($a) > 0) {
		
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
	$b[$i]['messages'] = array_reverse($d);
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
			}
      
      //return json_encode($data, JSON_FORCE_OBJECT);
      return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conversations  $conversations
     * @return \Illuminate\Http\Response
     */
    public function edit(Conversations $conversations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conversations  $conversations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conversations $conversations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conversations  $conversations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversations $conversations)
    {
        //
    }
}
