<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getUser()
    {
        $user = Auth::user();
        $category = db::table('category')->get();
        return view('user.index',['user'=>$user, 'category' => $category]);
    }

    public function postUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
        ],
        [
            'name.required' => 'Nhập tên user đê',
            'name.min' => 'Tên quá ngắn, nghĩ tên nào dài ra đê',
            'name.max' => 'Viết dài quá, xóa bớt đê',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        
        $this->validate($request, [
            'password' => 'required|min:3',
            'passwordAgain' => 'required|same:password'
        ],
        [
            'password.required' => 'Không nhập mật khẩu à?',
            'password.min' => 'Mật khẩu phải từ 3 kí tự trở lên',
            'passwordAgain.required' => 'Chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại không đúng'
        ]);
        $user->password = bcrypt($request->password);        

        $user->save();
        return redirect()->back()->with('thongbao', 'Sửa thông tin user thành công');
    }
}
