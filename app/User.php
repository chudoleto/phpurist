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
		// убираем лишние пробелы по краям (вдруг они там есть)
		// и всё с заглавной буквы
		$sename = ucfirst(trim($this->Sename));
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
		$ret = tirm($ret);									// если фамилии нет, перед именем будет пробел, убираем его
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
			return $sename . ' ' . substr($name, 0, 1) . '.';
		} elseif ($sename && $оtchestvo && $name) {
			return $sename . ' ' . substr($name, 0, 1) . '.' . ' ' . substr($оtchestvo, 0, 1) . '.';
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
}
