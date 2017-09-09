<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    //
	$fillable = ['project_id', 'user_id', 'title', 'body', 'output'];

	public function question() {
		return $this->hasMany('App\Questions');
	}

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function project() {
		return $this->belongsTo('App\Projects');
	}
}
