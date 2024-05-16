@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login1.css') }}" />
@endsection

<!-- 登録ボタン -->
<div class="header__register">
    <button class="header__register--item">
        <a class="header__register-button" href="/register">register
        </a>
    </button>
</div>

@section('content')
<div class="login">
    <h3 class="login__logo">
        Login
    </h3>

    <div class="login__content">
        <form class="login-form" action="/login" method="post">
            @csrf
            <div class="login-form--item">
                <label class="form__label" for="email">メールアドレス</label><br>
                <input class="login-form__input-item" type="text" name="email" id="email" placeholder="例:test@example.com">
            </div>
            <div class="form-login__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="login-form--item">
                <label class="form__label" for="password">パスワード</label><br>
                <input class="login-form__input-item" type="password" name="password" id="password" placeholder="例:coachtech1106">
            </div>
            <div class="form-login__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <div class="form__button">
                <button class="login__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection