<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserLogin
{
  
    //public $uid;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // PASS USER ID TO THE UserLogin EVENT
      
        //dd($event->user->id);
        //$uid = $event->user->id;
      
        event(new \App\Events\UserLogin($event->user->id));
    }
}
