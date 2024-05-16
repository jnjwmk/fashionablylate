<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use BaconQrCode\Renderer\Color\Rgb;

class RegisterController extends Controller
{
    // 画面表示
    public function register()
        {
            return view ('/register');
        }

    // データの受け取りと、dbに保存
    public function store(RegisterRequest $request)
    {
        $userData = $request->only(['name','email','password']);

        $userData['password']= Hash::make($userData['password']);

        $user = User::create($userData);

        return redirect('/login');
    }



}
