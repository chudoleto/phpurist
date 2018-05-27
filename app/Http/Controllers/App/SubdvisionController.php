<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subdvision;

class SubdvisionController extends Controller
{

    public function listGet(Request $request)
    {
        $list_of_Subdvision = Subdvision::orderBy('id')->get();
        return view('app.subdvision.list', [
            'list' => $list_of_Subdvision,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\SubdvisionController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\SubdvisionController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Subdvision::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\SubdvisionController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Subdvision::findOrNew($item_id);
		
		return view('app.subdvision.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\SubdvisionController@listGet');
		}
		
		$this->validate($request, [
			'name' => 'required|unique:Subdvision,name,'.$item_id.'|max:255',
		    'Description' => 'required|unique:Subdvision,Description,'.$item_id.'|max:255',
		]);
		
		$item = Subdvision::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\SubdvisionController@listGet');
		} else {
			return redirect()->action('App\SubdvisionController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}