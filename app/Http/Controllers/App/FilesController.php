<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Files;

class FilesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listGet(Request $request)
    {
        $list_of_Files = Files::orderBy('id')->get();
        return view('app.files.list', [
            'list' => $list_of_Files,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\FilesController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\FilesController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Files::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\FilesController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Files::findOrNew($item_id);
		
		return view('app.files.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\FilesController@listGet');
		}
		
		$this->validate($request, [
			'File_link' => 'required:Files,File_link,'.$item_id.'|max:255',
			'Task_id' => 'required',
		]);
		
		$item = Files::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\FilesController@listGet');
		} else {
			return redirect()->action('App\FilesController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}