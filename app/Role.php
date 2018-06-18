<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Role extends Model
{
	protected $table = 'role';
	
	protected $fillable = [
		'name',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		
		if ($obj) {
			return $obj;
		} else {
			return new static;
		}
		
		return $obj ?: new static;
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
	    $items = self::orderBy('id');
	    if (Auth::user()->Role->id == 1) {
	    	//
	    } elseif (Auth::user()->Role->id == 2) {
	    	$items = $items->whereNotIn('id', [1]);
	    } elseif (Auth::user()->Role->id == 3) {
	    	$items = $items->whereIn('id', [3]);
	    } elseif (Auth::user()->Role->id == 4) {
	    	$items = $items->whereIn('id', [4]);
	    }
	    $items = $items->get();
	    
	    $ret = '<option disabled selected> -- Не выбрано -- </option>';
	    foreach($items as $item) {
	        $ret .= '<option';
	        $ret .= ' value="'.$item->id.'"';
	        $ret .= ($item->id == $propper_id) ? ' selected' : '';
	        $ret .= '>';
	        $ret .= $item->name;
	        $ret .= '</option>';
	    }
	    
	    return $ret;
	}
	
}
