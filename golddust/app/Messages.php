<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //
	$fillable = ['user_id', 'author_id', 'body', 'read'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function author() {
	return $this->belongsTo('App\User', 'author_id');
	}
}
