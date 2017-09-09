<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
	$fillable = ['test_id', 'order', 'choice_id', 'question'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function choice() {
		return $this->hasMany('App\Choices');
	}
}
