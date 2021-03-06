<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listGet(Request $request)
    {
        $list_of_roles = Role::orderBy('id')->get();
        return view('app.role.list', [
            'list' => $list_of_roles,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\RoleController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\RoleController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Role::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\RoleController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
		$item = Role::findOrNew($item_id);
		
		return view('app.role.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\RoleController@listGet');
		}
		
		$this->validate($request, [
			'name' => 'required|unique:Role,name,'.$item_id.'|max:255',
		]);
		
		$item = Role::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\RoleController@listGet');
		} else {
			return redirect()->action('App\RoleController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}