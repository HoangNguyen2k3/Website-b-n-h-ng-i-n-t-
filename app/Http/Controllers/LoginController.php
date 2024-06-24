<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Đăng nhập thành công!');
        } else {
            return redirect('/login')->withErrors(['email' => 'Nhập sai thông tin tài khoản hoặc mật khẩu!']);
        }
    }

    public function login()
    {
        return view('login');
    }
}

