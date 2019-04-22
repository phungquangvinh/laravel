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

class MyController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    public function getShop()
    {
        $abc = DB::select('select * from category');

        return view('shop', ['abc' => $abc]);
    }
    public function Collection()
    {
        return view('collection');
    }
    public function getForm()
    {
        return view('form');
    }
    public function getMath()
    {
        return view('math');
    }
    public function detail()
    {
        $abc = DB::select('select * from category');

        return view('detail', ['abc' => $abc]);
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