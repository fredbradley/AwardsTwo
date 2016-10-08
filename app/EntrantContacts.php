<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


class EntrantContacts extends Model
{
	use LogsActivity;
    //
    protected $table = 'entrant_contacts';
    protected $guarded = [];
    
    public function entrant()
    {
        return $this->belongsTo('App\Entrant');
    }
}
