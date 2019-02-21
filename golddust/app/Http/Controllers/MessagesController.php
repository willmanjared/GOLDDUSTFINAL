<?php

namespace App\Http\Controllers;

use App\Conversations;
use App\Messages;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\NewMessage;

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
			$z;

	$a = Conversations::where([
	['user_one', '=', auth()->id()],
	['user_two', '=', $request['reciever_id']],
	])->orWhere([
	['user_one', '=', $request['reciever_id']],
        ['user_two', '=', auth()->id()],
	])->get();
//var_dump(json_decode($a, true));
//dd($a);
	if (count($a) > 0) {
$a = json_decode($a[0], true);
//dd($a['id']);

	$z = Messages::create([
		'conversations_id' => $a['id'],
		'user_id' => auth()->id(),
		'body' => htmlspecialchars($request['message']) 
	]);
		
		//dd($z);
		
		

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

	$z = Messages::create([
                'conversations_id' => $b['id'],
								'user_id' => auth()->id(), 
                'body' => htmlspecialchars($request['message']) 
        ]);
		
		//dd($z);

	}
				
				$author = User::find($request['reciever_id']);
				//dd($author);
				
				// EVENT SENT TO CLIENT
			
				$e = array(
					'user_id' => $request['reciever_id'],
					'reciever_id' => auth()->id(),
					'message' => $request['message'],
					'user' => auth()->user()->name,
					'created_at' => $z->created_at,
					'message_id' => $z->id
				);
				
				event(new \App\Events\NewMessage($e));

				// NOTIFICATIONS
				$author->notify(new NewMessage(auth()->user()));

//return "something";
			//return redirect('/f/messenger');
	//die();
			/*
			$response = array(
            'status' => 'success',
            'msg' => 'Message created successfully',
        );
				*/
 
        return response()->json( $e );
				
			
	
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
			//return response()->json($messages);
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
