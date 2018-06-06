<?php
namespace App\Http\Controllers\App;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listGet(Request $request)
    {
        $list_of_user = new User;
        $list_of_user = User::filterByActiveUserRole($list_of_user);
        $list_of_user = $list_of_user->orderBy('id')->get();
        
        return view('app.user.list', [
            'list' => $list_of_user,
        ]);
    }

    public function listPost(Request $request)
    {
        if ($request->has('btn_create')) {
            return redirect()->action('App\UserController@itemGet');
        }
        if ($request->has('btn_edit')) {
            $item_id = $request->get('btn_edit', '');
            return redirect()->action('App\UserController@itemGet', ['item_id' => $item_id]);
        }
        if ($request->has('btn_delete')) {
            $item_id = $request->get('btn_delete', '');
            if ($item_id) {
                $item = User::find($item_id);
                if ($item) {
                    $item->delete();
                }
            }
            return redirect()->action('App\UserController@listGet');
		}
	}
	
	public function itemGet(Request $request, $item_id = '')
	{
	    $item = User::findOrNew($item_id);
		
		return view('app.user.item', [
			'item' => $item,
		]);
	}
	
	public function itemPost(Request $request, $item_id = '')
	{
		if ($request->has('btn_cancel')) {
			return redirect()->action('App\UserController@listGet');
		}
		
		$this->validate($request, [
		    'login' => 'required|unique:User,login,'.$item_id.'|max:255',
		    'password' => 'required:User,Password,'.$item_id.'|min:6',
		    'Email' => 'required|unique:User,Email,'.$item_id.'|max:255',
			'Name' => 'required:User,Name,'.$item_id.'|max:255',
		    'Sename' => ':User,Sename,'.$item_id.'|max:255',
		    'Otchestvo' => ':User,Otchestvo,'.$item_id.'|max:255',
		    'Pol' => ':User,Pol,'.$item_id.'|max:255',
		    'Role_id' => 'required',
		    'Subdvision_id' => 'required',
		]);
		
		// дополнительная обработка данных формы
		$tmp_data = $request->all();
		$tmp_password = '';
		if ($tmp_data['password'] !== '******') {
		    $tmp_password = $tmp_data['password'];
		}
		unset($tmp_data['password']);
		
		$item = User::findOrNew($item_id);
		$item->fill($tmp_data);
		
		if ($tmp_password) {
		    $item->password = bcrypt($tmp_password);
		}
		$item->save();
		
		if ($request->has('btn_ok')) {
		    return redirect()->action('App\UserController@listGet');
		} else {
			return redirect()->action('App\UserController@itemGet', ['item_id' => $item->id]);
		}
	}
		
}