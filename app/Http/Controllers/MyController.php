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
use App\Models\product;

class MyController extends Controller
{
    public function getIndex()
    {        
        $slide = db::table('slide')->get();
        $product = product::where('active', 1)->orderBy('id','DESC')->paginate(4);
        $pro = product::find(1);
        $pr = product::where('active', 1)->where('id_category', 3)->orderBy('id','DESC')->paginate(4);
        return view('index', ['slide'=>$slide, 'product'=>$product, 'pro'=>$pro, 'pr'=>$pr]);
    }

    public function getShop()
    {
        $slide = db::table('slide')->get();
        $abc = product::where('active', 1)->orderBy('id','DESC')->paginate(3);
        return view('shop', ['abc' => $abc, 'slide'=>$slide]);
    }

    public function Collection()
    {
        $slide = db::table('slide')->get();
        $product = product::where('active', 1)->where('id_category', 4)->orderBy('id','DESC')->paginate(4);
        return view('collection', ['slide'=>$slide, 'product'=>$product]);
    }

    public function search(Request $request)
    {
        $key = $request->get('key');
        $product = Product::where('product','like','%'.$key.'%')->orWhere('description','like','%'.$key.'%')->orWhere('price','like','%'.$key.'%')->paginate(10);
        return view('search',['product'=>$product, 'key'=>$key]);
    }

    public function detail($id)
    {
        $product = product::find($id);

        return view('detail', ['product' => $product]);
    }

    public function admin()
    {
        return view('admin.index');
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