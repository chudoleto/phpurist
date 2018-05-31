<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
	protected $table = 'Files';
	
	protected $fillable = [
	    'File_link', 'Task_id',
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
