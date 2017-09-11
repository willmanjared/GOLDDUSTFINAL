<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public function project() {
		return $this->hasMany('App\Projects');
	}

        public function proposal() {
		return $this->hasMany('App\Proposals');
	}

        public function example() { 
                return $this->hasMany('App\Examples');
        }

        public function skillset() { 
                return $this->hasMany('App\Skillsets');
        }

        public function invite() { 
                return $this->hasMany('App\Invites');
        }

        public function test() { 
                return $this->hasMany('App\Tests');
        }

        public function sentFeedback() { 
                return $this->hasMany('App\Feedback');
        }

        public function recievedFeedback() { 
                return $this->hasMany('App\Feedback', 'author_id');
        }

        public function sentReviews() { 
                return $this->hasMany('App\Reviews');
        }

        public function recievedReviews() { 
                return $this->hasMany('App\Reviews', 'author_id');
        }

        public function recievedMessages() { 
                return $this->hasMany('App\Messages');
        }

        public function sentMessages() { 
                return $this->hasMany('App\Messages', 'author_id');
        }
}
