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
}
