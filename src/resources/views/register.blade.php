@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register1.css') }}" />
@endsection

<!-- ログインボタン -->
@section('link')
<a class="header__link" href="/login">login</a>
@endsection


@section('content')
<div class="register">
    <h3 class="register__logo content__heading">Register</h3>
    <div class="register__content">
        <form class="register-form" action="/register" method="post">
            @csrf
            <div class="register-form--item">
                <label class="form__label" for="name">お名前</label><br>
                <input class="register-form__input-item" type="text" name="name" id="name" placeholder="例:山田 太郎" value="{{ old ('name')}}">
            </div>
            <!-- バリデーションエラー -->
            <div class="form-register__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            <div class="register-form--item">
                <label class="form__label" for="email">メールアドレス</label><br>
                <input class="register-form__input-item" type="text" name="email" id="email" placeholder="例:test@example.com">
            </div>
            <div class="form-register__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="register-form--item">
                <label class="form__label" for="password">パスワード</label><br>
                <input class="register-form__input-item" type="password" name="password" id="password" placeholder=" 例:coachtech1106">
            </div>
            <div class="form-register__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <!-- ボタンを押すとログイン画面へ -->
            <div class="form__button">
                <button class="register__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection('content')