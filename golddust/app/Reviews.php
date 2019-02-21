<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    //
	$fillable = ['user_id', 'author_id', 'project_id', 'rating', 'body'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function author() {
		return $this->belongsTo('App\User', 'author_id');
	}

	public function project() {
		return $this->belongsTo('App\Projects');
	}
}
