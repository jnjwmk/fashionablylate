@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

<!-- ログアウトボタン -->
<div class="header__logout">
    <button class="header__logout--item">logout</button>
</div>

@section('content')
<div class="admin">
    <h3 class="admin__logo">Admin</h3>

    <div class="admin-choice">
        <input class="admin-choice__item" type="text" name="content" placeholder="名前やメールアドレスを入力してください">
        <select class="admin-choice--item-gender">
            <option hidden>性別</option>
            <option value="">全て</option>
            <option value="">男性</option>
            <option value="">女性</option>
            <option value="">その他</option>
        </select>
        <select class="admin-choice--item-kinds">
            <option hidden>お問い合わせの種類</option>
            <option value="">商品の交換について</option>
        </select>
        <!-- カレンダー -->
        <input class="admin-choice--item-input" type="date" name="date">
        <!-- 検索ボタン -->
        <button class="admin-choice--item-search">検索</button>
        <!-- リセットボタン -->
        <input class="admin-choice--item-reset" type="reset">
    </div>

    <div class="admin-center">
        <!-- エクスポートボタン -->
        <button class="admin-center__item-export">エクスポート</button>
        <!-- ページネーション -->
    </div>
    <div class="admin-table">
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header">
                    <span class="admin-table__header-span1">お名前</span>
                    <span class="admin-table__header-span">性別</span>
                    <span class="admin-table__header-span">メールアドレス</span>
                    <span class="admin-table__header-span">お問い合わせの種類</span>
                </th>
            </tr>
            <tr>
                <td></td>
            </tr>


        </table>
    </div>
</div>
@endsection