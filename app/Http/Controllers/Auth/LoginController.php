<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if( Auth::attempt(['email' => $email, 'password' =>$password])) {
            if(Auth::check()){
                $user = Auth::user();
                if (($user->role_id == 1) || ($user->role_id == 2)) {
                    return redirect('admin');
                }
                else return redirect('/');
            }
            else return redirect('login');
        } 
        else {                
            return redirect('login')->with('thongbao','Đăng nhập ko thành công!');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
