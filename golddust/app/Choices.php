<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choices extends Model
{
    //
	$fillable = ['question_id', 'body'];

	public function question() {
		return $this->belongsTo('App\Questions');
	}
}
