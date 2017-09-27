<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserLogin implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
  
    public $id;
    //public $socket;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($uid)
    {
        //
      $this->id = $uid;
      //$this->socket = 3000;
      //dd($this);
    }
  
    /**
     * The event's broadcast name.
     *
     * @return string
     */
  /*
    public function broadcastAs()
    {
        return 'create.server';
    }
    */

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //dd("User Logged In With ID: " . $this->uid);
      
      //dd($this);
        return ['test-channel'];
    }
}
