<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Task extends Authenticatable
{
    use Notifiable;
    
	protected $table = 'task';
	
	protected $fillable = [
	    'Header','Description','Short_deadline','Start','End','Project_id','Priority_task_id','Status_task_id','User_id', 'Sudbvision_id',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		return $obj ?: new static;
	}
	
	public static function filterByActiveUserTask($list)
	{
	    if (Auth::user()->Role->id == 1) {
	        //
	    } elseif (Auth::user()->Role->id == 2) {
	        $list = $list->where('Sudbvision_id', '=', Auth::user()->Sudbvision_id); 
	        $list = $list->where('Sudbvision_id', '=', Auth::user()->Task_id); 
	    } else {
	        $list = $list->where('User_id', '=', 99999);
	    }
	    return $list;
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
	
	public static function getSelectFieldOptions($value = '', $old_id = '',  $allow_empty = false)
	{
	    $ret = '';
	    
	    $propper_id = '';
	    if ($value) {
	        $propper_id = $value->id;
	    } elseif ($old_id) {
	        $propper_id = $old_id;
	    }
	    $items = self::orderBy('id');
	    if (Auth::user()->Role->id == 1) {
	        //
	    } elseif (Auth::user()->Role->id == 2) {
	        $items = $items
	        ->where('Subdvision_id', '=', Auth::user()->Subdvision_id)
	        ->where(function($items) {
	            $items->orWhere('Role_id', '=', 2)->orWhere('Role_id', '=', 3);
	        });
	    } elseif (Auth::user()->Role->id == 3) {
	        $items = $items->where('id', '=', Auth::user()->id);
	    }
	    $items = $items->get();
	    
	    $ret = '<option ' . ($allow_empty ? '' : 'disabled ') . 'value = "" selected> -- Не выбрано -- </option>';
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
