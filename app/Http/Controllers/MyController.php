<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

use App\User;
use App\Models\category;
use App\Models\product;

class MyController extends Controller
{
    public function getIndex()
    {        
        $slide = db::table('slide')->get();
        $product = product::where('active', 1)->orderBy('id','DESC')->paginate(4);
        $category = db::table('category')->get();
        $pro = product::find(1);
        $produce = product::where('active', 1)->orderBy('id','DESC')->paginate(3);
        $pr = product::where('active', 1)->where('id_category', 3)->orderBy('id','DESC')->paginate(4);
        return view('index', ['slide'=>$slide, 'product'=>$product, 'produce'=>$produce, 'category'=>$category, 'pro'=>$pro, 'pr'=>$pr]);
    }

    public function getShop()
    {
        $slide = db::table('slide')->get();
        $abc = product::where('active', 1)->orderBy('id','DESC')->paginate(3);
        return view('shop', ['abc' => $abc, 'slide'=>$slide]);
    }

    public function category($id)
    {
        $slide = db::table('slide')->get();
        $category = db::table('category')->get();
        $db_cate = category::find($id);
        $product = product::where('active', 1)->where('id_category', $id)->orderBy('id','DESC')->paginate(4);
        return view('category', ['slide'=>$slide, 'category'=>$category, 'db_cate'=>$db_cate, 'product'=>$product]);
    }

    public function search(Request $request)
    {
        $category = db::table('category')->get();
        $key = $request->get('key');
        $product = Product::where('product','like','%'.$key.'%')->orWhere('description','like','%'.$key.'%')->orWhere('price','like','%'.$key.'%')->paginate(10);
        return view('search',['product'=>$product, 'key'=>$key, 'category'=>$category]);
    }

    public function detail($id)
    {
        $product = product::find($id);
        
        return view('detail', ['product' => $product]);
    }

    public function admin()
    {
        $auth = Auth::user();
        return view('admin.index', ['auth' => $auth]);
    }

    public function test()
    {
        $user = User::find(1);

        dd($user->user_role()->get());
    }

    public function getJson()
    {
        $array = ['abc'=>'vinh'];
        return Response()->json($array);
    }
    /*public function __construct() { //hàm khởi tạo
        $this->middleware('auth');
    }*/
}