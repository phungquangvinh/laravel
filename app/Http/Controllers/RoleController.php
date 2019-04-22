<?php

namespace App\Http\Controllers;
use DB;
use App\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list()
    {
    	$role = db::table('role')->get();
    	return view('admin.role.list',['role'=>$role]);
    }

    public function add()
    {
    	return view('admin.role.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'role' => 'required|unique:role',
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
    	$role = db::table('role')->where('id_role', $id)->get();
    	return view('admin.role.edit', ['role'=>$role]); //đang sửa
    }

    public function postEdit(Request $request, $id)
    {
        $lophoc = Lophoc::find($id);
        $this->validate($request, [
            'tenlop' => 'required',
        ],
        [
            'tenlop.required' => 'Nhập tên lớp học!',
        ]);

        $lophoc->tenlop = $request->tenlop;
        $lophoc->id_khoahoc = $request->id_khoahoc;
        $lophoc->id_gvcn = $request->id_gvcn;

        $lophoc->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getDelete($id)
    {
        $role = Role::find($id);
        $role -> delete();
        return redirect()->back()->with('thongbao', 'Xóa user thành công');
    }
}
