<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list()
    {
        $auth = Auth::user();
    	$role = db::table('roles')->get();
    	return view('admin.role.list',['role'=>$role, 'auth' => $auth]);
    }

    public function add()
    {
    	return view('admin.role.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'role' => 'required|unique:roles',
        ],
        [
            'role.required' => 'Nhập tên quyền!',
            'role.unique' => 'Tên quyền đã tồn tại!',
        ]);

        $role = new Role;
        $role->role = $request->role;

        $role->save();
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function getEdit($id)
    {
    	$role = Role::find($id);
    	return view('admin.role.edit', ['role'=>$role]);
    }

    public function postEdit(Request $request, $id)
    {
        $role = Role::find($id);
        $this->validate($request, [
            'role' => 'required',
        ],
        [
            'role.required' => 'Nhập tên quyền!',
        ]);

        $role->role = $request->role;

        $role->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getDelete($id)
    {
        $role = Role::find($id);
        $role -> delete();
        return redirect()->back()->with('thongbao', 'Xóa user thành công');
    }
}
