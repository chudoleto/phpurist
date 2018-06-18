<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Subdvision extends Model
{
	protected $table = 'subdvision';
	
	protected $fillable = [
	    'Name','Description',
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
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
	    if (Auth::user()->Role->id != 1) {
	    	$items = $items->where('id', '=', Auth::user()->Subdvision_id);
	    }
	    $items = $items->get();
	    
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
