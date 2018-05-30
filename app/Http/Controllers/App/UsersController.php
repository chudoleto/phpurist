<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users_;

class UsersController extends Controller
{

    public function listGet(Request $request)
    {
        $list_of_projects = Users_::orderBy('id')->get();
        return view('app.users_.list', [
            'list' => $list_of_projects,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\UsersController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\UsersController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = Users_::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\UsersController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = Users_::findOrNew($item_id);
		
		return view('app.users_.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\UsersController@listGet');
		}
		
		$this->validate($request, [
		    'Login' => 'required|unique:User,Login,'.$item_id.'|max:255',
		    'Password' => 'required:User,Password,'.$item_id.'|max:255',
		    'Email' => 'required|unique:User,Email,'.$item_id.'|max:255',
			'Name' => 'required:User,Name,'.$item_id.'|max:255',
		    'Sename' => 'required:User,Sename,'.$item_id.'|max:255',
		    'Otchestvo' => 'required:User,Otchestvo,'.$item_id.'|max:255',
		    'Pol' => 'required:User,Pol,'.$item_id.'|max:255',
		    'Role_id' => 'required',
		    'Subdvision_id' => 'required',
		]);
		
		$item = Users_::findOrNew($item_id);
		$item->fill($request->all());
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\UsersController@listGet');
		} else {
			return redirect()->action('App\UsersController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}