<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ログイン画面の表示
    public function index()
    {
        return view('login');
    }

    //
    public function store(LoginRequest $request)
    {
        $loginData = $request->only('email','password');

        return view('/admin');

    }

}
