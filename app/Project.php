<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Project extends Model
{
	protected $table = 'project';
	
	protected $fillable = [
		'Name','Deadline','Deadline','Comment','Status_project_id', 'User_id',
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
	
	public static function getSelectFieldOptions($value = '', $old_id = '', $allow_empty = false)
	{
	    $ret = '';
	    
	    $propper_id = '';
	    if ($value) {
	        $propper_id = $value->id;
	    } elseif ($old_id) {
	        $propper_id = $old_id;
	    }
	    
	    $items = self::orderBy('id');
	    if (Auth::user()->Role->id != 1) {
	    	$subdvision_id = Auth::user()->Subdvision_id;
	    	$items = $items->whereHas('User', function($q) use ($subdvision_id) {
	    		$q->where('Subdvision_id', '=', $subdvision_id);
	    	});
	    }
	    $items = $items->get();
	    
	    $ret = '<option ' . ($allow_empty ? '' : 'disabled ') . 'value = "" selected> -- Не выбрано -- </option>';
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
