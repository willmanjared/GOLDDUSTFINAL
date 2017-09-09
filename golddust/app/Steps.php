<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    //
	$fillable = ['skillset_id', 'example_id', 'body', 'order', 'deliverable'];

	public function skillset() {
		return $this->belongsTo('App\Skillsets');
	}

	public function example() {
		return $this->hasMany('App\Examples');
	}
}
