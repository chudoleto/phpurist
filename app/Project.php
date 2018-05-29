<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $table = 'Project';
	
	protected $fillable = [
		'Name','Deadline','Deadline','Comment','Status_project_id',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
	
	public function Status_project()
	{
		return $this->belongsTo('App\Status_project', 'Status_project_id');
	}
}
