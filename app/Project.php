<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $table = 'project';
	
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
	
	public function User()
	{
		return $this->belongsTo('App\User', 'User_id');
	}
	
	public static function getSelectFieldOptions($value = '', $old_id = '')
	{
	    $ret = '';
	    
	    $propper_id = '';
	    if ($value) {
	        $propper_id = $value->id;
	    } elseif ($old_id) {
	        $propper_id = $old_id;
	    }
	    $items = self::orderBy('id')->get();
	    
	    $ret = '<option disabled selected> -- Не выбрано -- </option>';
	    foreach($items as $item) {
	        $ret .= '<option';
	        $ret .= ' value="'.$item->id.'"';
	        $ret .= ($item->id == $propper_id) ? ' selected' : '';
	        $ret .= '>';
	        $ret .= $item->Name;
	        $ret .= '</option>';
	    }
	    
	    return $ret;
	}
}
