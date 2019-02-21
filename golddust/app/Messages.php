<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //
	protected $fillable = ['user_id', 'conversations_id', 'body', 'read'];

	public function user() {
		return $this->belongsTo('App\User');
	}
	
	public function conversation() {
		return $this->belongsTo('App\Conversations');
	}

}
