<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\DonHang;

use Illuminate\Http\Request;

class DonHangController extends Controller
{
    public function list()
    {
    	$donhang = db::table('donhang')->get();

    	return view('admin.quanlydonhang.list',['donhang'=>$donhang]);
    }

    public function getEdit($id)
    {
    	$donhang = DonHang::find($id);
    	return view('admin.quanlydonhang.edit', ['donhang'=>$donhang]);
    }

    public function postEdit(Request $request, $id)
    {
        $donhang = DonHang::find($id);
        $this->validate($request, [
            'total_price' => 'required',
        ],
        [
            'total.required' => 'Nhập số tiền thanh toán!',
        ]);

        $donhang->total_price = $request->total_price;
        $donhang->status = $request->status;
        $donhang->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getDelete($id)
    {
        $donhang = DonHang::find($id);
        $donhang -> delete();
        return redirect()->back()->with('thongbao', 'Giải quyết đơn hàng thành công');
    }
}
