<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examples extends Model
{
    //
	$fillable = ['user_id', 'step_id', 'file', 'link', 'title', 'body'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function step() {
		return $this->belongsTo('App\Steps');
	}
}
