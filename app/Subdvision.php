<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdvision extends Model
{
	protected $table = 'Subdvision';
	
	protected $fillable = [
	    'Name','Description',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
}
