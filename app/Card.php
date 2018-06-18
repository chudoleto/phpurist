<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $table = 'card';
	
	protected $fillable = [
	    'Otvetchik','Istec','RIP','executor','Address_court','Stage_rassmotrenia','Appellate_period','Fines','Description','Task_id',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
	
	public function Task()
	{
		return $this->belongsTo('App\Task', 'Task_id');
	}
	
}
