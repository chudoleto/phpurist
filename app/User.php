<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'User';
	
	protected $fillable = [
		'Login','Password','Email','Name','Sename','Otchestvo','Pol','Role_id','Subdvision_id'
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
	
	public function getFullName()
	{
	    return $this->Name . '. ' . $this->Sename . '.' . $this->Otchestvo;
	}
	
	public function Role()
	{
		return $this->belongsTo('App\Role', 'Role_id');
	}
	
	public function Subdvision()
	{
	    return $this->belongsTo('App\Subdvision', 'Subdvision_id');
	}
}
