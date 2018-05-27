<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servise extends Model
{
	protected $table = 'Servise';
	
	protected $fillable = [
	    'Kod','Name','Version','Address',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
}
