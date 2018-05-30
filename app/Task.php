<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $table = 'Task';
	
	protected $fillable = [
	    'Header','Description','Short_deadline','Start','End','Status',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
	
	public function Project()
	{
		return $this->belongsTo('App\Project', 'Project_id');
	}
	
	public function Priority_task()
	{
	    return $this->belongsTo('App\Priority_task', 'Priority_task_id');
	}
	
	public function Status_task()
	{
	    return $this->belongsTo('App\Status_task', 'Status_task_id');
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
	        $ret .= $item->Header;
	        $ret .= '</option>';
	    }
	    
	    return $ret;
	}
	
}
