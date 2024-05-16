@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact0512.css') }}" />
@endsection

@section('content')
<div class="contact">
    <h3 class="contact__logo">
        Contact
    </h3>

    <div class="contact-table">
        <form class="contact-form" action="/confirm" method="post">
            @csrf
            <table class="contact-table__inner">
                <tr class="contact-table__row">
                    <th class="contact-table__header">お名前<span class="contact-table__required">※</span>
                    </th>
                    <td>
                        <input class="contact-table__input-name" type="text" name="first_name" placeholder="例:山田">
                        <input class="contact-table__input-name" type="text" name="last_name" placeholder="例:太郎">
                    </td>
                </tr>
                <!-- バリデーションエラー -->
                <div class="form-contact__error">
                    @error('first_name','last_name')
                    {{ $message }}
                    @enderror
                </div>
                <tr class="contact-table__row">
                    <th class="contact-table__header">性別<span class="contact-table__required">※</span>
                    </th>
                    <td>
                        <input class="contact-table__button" type="radio" id="button1" name="gender" value="button1" checked="">
                        <label for="button1">男性</label>
                        <input class="contact-table__button" type="radio" id="button2" name="gender" value="button2">
                        <label for="button2">女性</label>
                        <input class="contact-table__button" type="radio" id="button3" name="gender" value="button3">
                        <label for="button3">その他</label>
                    </td>
                </tr>
                <div class="form-contact__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
                <tr class="contact-table__row">
                    <th class="contact-table__header">メールアドレス<span class="contact-table__required">※</span>
                    </th>
                    <td>
                        <input class="contact-table__email" type="text" name="email" placeholder="例:test@example.com">
                    </td>
                </tr>
                <div class="form-contact__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <tr class="contact-table__row">
                    <th class="contact-table__header">電話番号<span class="contact-table__required">※</span>
                    </th>
                    <td>
                        <input class="contact-table__tel" type="tel" name="tel" placeholder="080">
                        <span class="contact-table__tel-hyphen">-</span>
                        <input class="contact-table__tel" type="tel" name="tel" placeholder="1234">
                        <span class="contact-table__tel-hyphen">-</span>
                        <input class="contact-table__tel" type="tel" name="tel" placeholder="5678">
                    </td>
                </tr>
                <div class="form-contact__error">
                    @error('tell')
                    {{ $message }}
                    @enderror
                </div>
                <tr class="contact-table__row">
                    <th class="contact-table__header">住所<span class="contact-table__required">※</span>
                    </th>
                    <td>
                        <input class="contact-table__address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                    </td>
                </tr>
                <div class="form-contact__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
                <tr class="contact-table__row">
                    <th class="contact-table__header">建物名</th>
                    <td>
                        <input class="contact-table__address2" type="text" name="address2" placeholder="例:千駄ヶ谷マンション101">
                    </td>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">お問い合わせの種類<span class="contact-table__required">※</span>
                    </th>
                    <td>
                        <select class="contact-table__inquiry-select">
                            <option name="inquiry" hidden>選択してください</option>
                        </select>
                    </td>
                </tr>
                <div class="form-contact__error">
                    @error('inquiry')
                    {{ $message }}
                    @enderror
                </div>
                <tr class="contact-table__row">
                    <th class="contact-table__header">お問い合わせ内容<span class="contact-table__required">※</span>
                    </th>
                    <td>
                        <textarea name="detail" col="" rows="" placeholder="お問い合わせ内容をご記載ください"></textarea>
                    </td>
                    <div class="form-contact__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
            </table>
            <div class="contact__button">
                <button class="contact__button-item" action="" method="">確認画面</button>
            </div>
        </form>
    </div>
</div>
@endsection