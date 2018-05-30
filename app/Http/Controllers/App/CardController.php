<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Card;

class CardController extends Controller
{

    public function listGet(Request $request)
    {
        $list_of_card = Card::orderBy('id')->get();
        return view('app.card.list', [
            'list' => $list_of_card,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\CardController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\CardController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Card::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\CardController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Card::findOrNew($item_id);
		
		return view('app.card.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\CardController@listGet');
		}
		
		$this->validate($request, [
			'Otvetchik' => 'required:Card,Otvetchik,'.$item_id.'|max:255',
		    'Istec' => 'required:Card,Istec,'.$item_id.'|max:255',
		    'RIP' => 'required:Card,RIP,'.$item_id.'|max:255',
		    'executor' => 'required:Card,executor,'.$item_id.'|max:255',
		    'Address_court' => 'required:Card,Address_court,'.$item_id.'|max:255',
		    'Stage_rassmotrenia' => 'required:Card,Stage_rassmotrenia,'.$item_id.'|max:255',
		    'Appellate_period' => 'required:Card,Appellate_period,'.$item_id.'|max:255',
		    'Fines' => 'required:Card,Fines,'.$item_id.'|max:255',
		    'Description' => 'required:Card,Description,'.$item_id.'|max:255',
			'Task_id' => 'required',
		]);
		
		$item = Card::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\CardController@listGet');
		} else {
			return redirect()->action('App\CardController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}