<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_task extends Model
{
	protected $table = 'Status_task';
	
	protected $fillable = [
		'name',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
}
