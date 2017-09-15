<?php

namespace App\Http\Controllers;

use App\Conversations;
use App\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
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
    public function create(Request $request)
    {
        //THIS IS WHERE MESSAGES WILL BE STORED IN THE DATABASE
/*
	Messages::create([
	'user_id' => $request['reciever_id'],
	'body' => $request['message'],
	'author_id' => auth()->id()
	]);
*/
//var_dump($request['reciever_id']);
			if (isset($request['reciever_id'])) {

	$a = Conversations::where([
	['user_one', '=', auth()->id()],
	['user_two', '=', $request['reciever_id']],
	])->orWhere([
	['user_one', '=', $request['reciever_id']],
        ['user_two', '=', auth()->id()],
	])->get();
//var_dump(json_decode($a, true));
//dd();
	if (count($a) > 0) {
$a = json_decode($a[0], true);
//dd($a['id']);

	Messages::create([
		'conversation_id' => $a['id'],
		'user_id' => auth()->id(),
		'body' => $request['message'] 
	]);

	} else {
		Conversations::create([
		'user_one' => auth()->id(),
		'user_two' => $request['reciever_id']
		]);

$b = Conversations::where([
        ['user_one', '=', auth()->id()],
        ['user_two', '=', $request['reciever_id']],
        ])->orWhere([
        ['user_one', '=', $request['reciever_id']],
        ['user_two', '=', auth()->id()],
        ])->get();

	//var_dump($b);
	$b = json_decode($b[0], true);

	Messages::create([
                'conversation_id' => $b['id'],
		'user_id' => auth()->id(), 
                'body' => $request['message'] 
        ]);

	}


	return redirect('/messenger');
			
		} else {
	//end if
				return "error";
			}
	
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
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
