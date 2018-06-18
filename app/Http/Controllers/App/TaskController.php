<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listGet(Request $request)
    {
        $list_of_task = Task::orderBy('id')->get();
        return view('app.task.list', [
            'list' => $list_of_task,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\TaskController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\TaskController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Task::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\TaskController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Task::findOrNew($item_id);
		
		return view('app.task.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\TaskController@listGet');
		}
		
		$this->validate($request, [
			'Header' => 'required|unique:Task,Header,'.$item_id.'|max:255',
		    'Description' => ':Task,Description,'.$item_id.'|max:255',
		    'Short_deadline' => 'required:Task,Short_deadline, date_format:Y-m-d'.$item_id,
		    'Start' => 'required:Task,Start, date_format:Y-m-d'.$item_id,
		    'End' => 'required:Task,End, date_format:Y-m-d'.$item_id,
			'Project_id' => 'required',
		    'Priority_task_id' => 'required',
		    'Status_task_id' => 'required',
		]);
		
		$item = Task::findOrNew($item_id);
		$item->fill($request->all());
		if(!$item->User_id){
		    $item->User_id = Auth::user()->id;
		}
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\TaskController@listGet');
		} else {
			return redirect()->action('App\TaskController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}