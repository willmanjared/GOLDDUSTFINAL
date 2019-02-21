<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposals extends Model
{
    //
	protected $fillable = ['user_id', 'projects_id', 'rate', 'body', 'resume', 'answers_id'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function project() {
		return $this->belongsTo('App\Projects', 'projects_id');
		//return $this->hasOne('App\Projects');
	}
	
	/*
	
	public function has_applied() {
		return $this->belongsTo('App\Projects');
	}
	
	*/
}
