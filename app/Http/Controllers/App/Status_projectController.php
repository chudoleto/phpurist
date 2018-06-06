<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Status_project;

class Status_projectController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listGet(Request $request)
    {
        $list = Status_project::orderBy('id')->get();
        return view('app.status_project.list', [
            'list' => $list,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\Status_projectController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\Status_projectController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Status_project::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\Status_projectController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Status_project::findOrNew($item_id);
		
		return view('app.status_project.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\Status_projectController@listGet');
		}
		
		$this->validate($request, [
			'Description' => 'required|unique:Status_project,Description,'.$item_id.'',
		]);
		
		$item = Status_project::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\Status_projectController@listGet');
		} else {
			return redirect()->action('App\Status_projectController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}