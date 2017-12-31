<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{
  	use LogsActivity;
 	use SoftDeletes;   //
 	
 	protected $table;
    protected $guarded = [];
 	
 	public function __construct($table=null) {
 		parent::__construct();
 		if ($table !== null) {
 			$this->table = $table;
		} else {
			$this->table = session('award')->prefix."_entries";
		}
 	}
 	public function entrant() {
	 	return $this->belongsTo('App\Entrant', 'Entry_Contact');
 	}
 	public function category() {
	 	return $this->belongsTo('App\Categories', 'Cat');
 	}
}
