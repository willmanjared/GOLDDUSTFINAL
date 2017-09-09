<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposals extends Model
{
    //
	$fillable = ['user_id', 'project_id', 'rate', 'body', 'resume', 'test_answer'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function project() {
		return $this->belongsTo('App\Proposals');
	}
}
