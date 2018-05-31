<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Priority_task;

class Priority_taskController extends Controller
{

    public function listGet(Request $request)
    {
        $list_of_Priority_task = Priority_task::orderBy('id')->get();
        return view('app.priority_task.list', [
            'list' => $list_of_Priority_task,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\Priority_taskController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\Priority_taskController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Priority_task::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\Priority_taskController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Priority_task::findOrNew($item_id);
		
		return view('app.priority_task.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\Priority_taskController@listGet');
		}
		
		$this->validate($request, [
			'Description' => ':Priority_task,Description,'.$item_id.'',
		    'Private' => ':Priority_task,Private,'.$item_id.'',
		]);
		
		$item = Priority_task::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\Priority_taskController@listGet');
		} else {
			return redirect()->action('App\Priority_taskController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}