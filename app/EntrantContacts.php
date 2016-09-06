<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntrantContacts extends Model
{
    //
    protected $table = 'entrant_contacts';
    protected $guarded = [];
    
    public function entrant()
    {
        return $this->belongsTo('App\Entrant');
    }
}
