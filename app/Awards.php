<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Awards extends Model
{
 	use LogsActivity;
    //
    protected $table = 'awards';
    protected $guarded = [];
    
    public function timeUntilDeadline() {
	    $now = time();
	    $deadline = $this->entries_close_date;

	    $countdown = round(($deadline - $now)/86400);
		
		if ($countdown > 0) {
		    $this->timeUntilDeadline = $countdown." days";
		} else {
			$this->timeUntilDeadline = floor((($deadline-$now) % 86400) / 3600)." hours";
		}
	    return $this->timeUntilDeadline;
    }
}
