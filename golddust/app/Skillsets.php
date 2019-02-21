<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillsets extends Model
{
    //
	$fillable = ['user_id', 'title', 'body'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function step() {
		return $this->hasMany('App\Steps');
	}
}
