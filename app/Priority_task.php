<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority_task extends Model
{
	protected $table = 'Priority_task';
	
	protected $fillable = [
	    'Description','Private',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
}
