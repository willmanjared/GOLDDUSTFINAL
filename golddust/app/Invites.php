<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invites extends Model
{
    //
	$fillable = ['project_id', 'user_id'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function project() {
		return $this->belongsTo('App\Projects'):
	}
}
