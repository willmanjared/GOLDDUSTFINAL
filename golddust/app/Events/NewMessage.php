<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;


class NewMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        //
        $this->message = $message;
      //dd("user-". $this->message->reciever_id . "");
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //dd($this->message->reciever_id);
        //return new PrivateChannel('channel-name');
        //return ['user-'. $this->message->reciever_id];
      return ['test-channel'];
    }
  
  // THE ONLY WAY THIS IS SEEMING TO WORK IS WITH THIS BROADCASR AS FUNCTION
  // THE WILDCARD CHANNEL IS NOT BROADCASTING EVENTS CORRECTLY FOR REASONS I DONT KNOW
  
  public function broadcastAs() {
    return "user-". $this->message['user_id'] . "-message";
    //return 'user-1';
  }
}
