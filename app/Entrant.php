<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Entrant extends Authenticatable
{
	protected $table = 'entrants';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function contacts() {
	    return $this->hasOne('App\EntrantContacts');
    }
}
