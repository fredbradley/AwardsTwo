<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table;
    protected $guarded = [];
    protected static $_table;
    
    public function setTable($table)
    {
        static::$_table = $table;
    }
	
	public function getTable()
    {
        return static::$_table;
    }

}
