<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listGet(Request $request)
    {
        $list_of_projects = Project::orderBy('id')->get();
        return view('app.project.list', [
            'list' => $list_of_projects,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\ProjectController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\ProjectController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Project::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\ProjectController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
		$item = Project::findOrNew($item_id);
		
		return view('app.project.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\ProjectController@listGet');
		}
		
		$this->validate($request, [
			'Name' => 'required|unique:Project,Name,'.$item_id.'|max:255',
			'Status_project_id' => 'required',
		]);
		
		$item = Project::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\ProjectController@listGet');
		} else {
			return redirect()->action('App\ProjectController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}