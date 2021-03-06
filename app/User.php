<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    
	protected $table = 'user';
	
	protected $fillable = [
		'login','password','Email','Name','Sename','Otchestvo','Pol','Role_id','Subdvision_id'
	];
	
	// Put this in any model and use
	// Modelname::findOrCreate($id);
	public static function findOrNew($id)
	{
		$obj = static::find($id);
		
		if (!$obj) {
			$obj = new static;
			if (Auth::user()->Role->id == 2) {
				$obj->Subdvision_id = Auth::user()->Subdvision_id;
			}
		}
		return $obj;
		 
	}
	
	public static function filterByActiveUserRole($list)
	{
		if (Auth::user()->Role->id == 1) {
			//
		} elseif (Auth::user()->Role->id == 2) {
			$list = $list->where('Subdvision_id', '=', Auth::user()->Subdvision_id);
		} else {
		    $list = $list->where('Subdvision_id', '=', 99999);
		}
		return $list;
	}
	
	public function getFullName()
	{
		// убираем лишние пробелы по краям (вдруг они там есть)
		// и всё с заглавной буквы
	    $sename = ucfirst(trim($this->Sename)); // ucfirst - первый символ в верхний регистр. trim - удаляет пробелы сначала и с конца 
		$name = ucfirst(trim($this->Name));
		$оtchestvo = ucfirst(trim($this->Otchestvo));
		
		// в PHP конкатенация делается через точку (не через плюс)
		// можно операцию конкатенации (точку) указывать прямо в операторе присваивания (знак равно)
		// $ret = $ret.'строка';		можно заменить на 			$ret .= 'строка';
		
		// будем постепенно "наращивать" возвращаемое значение
		$ret = '';											// сначала пусто
		$ret .= $sename;									// прибавляем фамилию
		$ret .= ($name) ? ' '.$name : '';					// если имя задано прибавляем имя с пробелом в начале
		$ret .= ($оtchestvo) ? ' '.$оtchestvo : '';			// аналогично с отчеством
		$ret = trim($ret);									// если фамилии нет, перед именем будет пробел, убираем его
		return $ret; // ВСЁ
	}
	
	public function getFullNameShort()
	{
		$sename = ucfirst(trim($this->Sename));
		$name = ucfirst(trim($this->Name));
		$оtchestvo = ucfirst(trim($this->Otchestvo));
		
		if (!$sename && !$оtchestvo && $name) {
			return $name;
		} elseif ($sename && !$оtchestvo && $name) {
			return $sename . ' ' . mb_substr($name, 0, 1) . '.';
		} elseif ($sename && $оtchestvo && $name) {
		    return $sename . ' ' . mb_substr($name, 0, 1) . '.' . ' ' . mb_substr($оtchestvo, 0, 1) . '.';
		} else {
			return $this->getFullName();
		}
	}
	
	public function Role()
	{
		return $this->belongsTo('App\Role', 'Role_id');
	}
	
	public function Subdvision()
	{
	    return $this->belongsTo('App\Subdvision', 'Subdvision_id');
	}
	
	public function polString($val = '')
	{
	    if (!$val) {
	        $val = $this->Pol;
	    }
	    return ($val == 'female') ? 'Женщина' : 'Мужчина';
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
			$ret .= $item->getFullNameShort();
			$ret .= '</option>';
		}
		
		return $ret;
	}
}
