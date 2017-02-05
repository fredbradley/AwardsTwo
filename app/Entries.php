<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entries extends Model
{
  	use LogsActivity;
 	use SoftDeletes;   //
 	
 	public function entrant() {
	 	$this->belongsTo('App\Entrant', 'Entry_Contact');
 	}
}
