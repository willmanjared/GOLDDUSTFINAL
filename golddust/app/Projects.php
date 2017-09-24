<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Proposals;

class Projects extends Model
{
    //
	protected $fillable = ['user_id', 'title', 'body', 'status', 'amount_spent', 'project_length_unit', 'project_length', 'payment_period', 'deliverables', 'skill_level', 'test_id'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function proposal() {
		return $this->hasMany('App\Proposals', 'project_id');
	}
	
	/*
	
	public function has_applied() {
		$data = \App\Proposals::where([
			'user_id' => \Auth::user()->id,
			'project_id' => $this->id
		]);
		
		return $data;
	}
	*/

	public function invite() {
		return $this->hasMany('App\Invites');
	}

	public function test() {
		return $this->hasOne('App\Tests', 'test_id');
	}

	public function review() {
		return $this->hasMany('App\Reviews');
	}
}
