<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servise;

class ServiseController extends Controller
{

    public function listGet(Request $request)
    {
        $list_of_Priority_task = Servise::orderBy('id')->get();
        return view('app.servise.list', [
            'list' => $list_of_Priority_task,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\ServiseController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\ServiseController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Servise::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\ServiseController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Servise::findOrNew($item_id);
		
		return view('app.servise.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\ServiseController@listGet');
		}
		
		$this->validate($request, [
			'Kod' => 'required|unique:Servise,Kod,'.$item_id.'|max:255',
		    'Name' => 'required|unique:Servise,Name,'.$item_id.'|max:255',
		    'Version' => 'required|unique:Servise,Version,'.$item_id.'|max:255',
		    'Address' => 'required|unique:Servise,Address,'.$item_id.'|max:255',
		]);
		
		$item = Servise::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\ServiseController@listGet');
		} else {
			return redirect()->action('App\ServiseController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}