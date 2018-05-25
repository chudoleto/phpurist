<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_project extends Model
{
	protected $table = 'Status_project';
	
	protected $fillable = [
		'Description',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
}
