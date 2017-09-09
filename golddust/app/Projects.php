<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
	$fillable = ['user_id', 'title', 'body, 'amount_spent', 'project_length_unit',
	'project_length', 'payment_period', 'deliverables', 'skill_level', 'test_id'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function proposal() {
		return $this->hasMany('App\Proposals');
	}

	public function invite() {
		return $this->hasMany('App\Invites');
	}

	public function test() {
		return $this->hasOne('App\Tests');
	}

	public function review() {
		return $this->hasMany('App\Reviews');
	}
}
