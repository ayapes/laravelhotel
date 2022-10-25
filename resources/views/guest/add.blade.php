@extends('layouts.hotelapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','ホテルララベル予約管理システム')

@section('menubar','ご利用者様登録ページ')

@section('content')
<form action="/guest/add" method="POST" class="form-group" >
    @csrf
    <label for="name">名前</label>
    <input type="text" name="name" placeholder="お名前" class="form-control" required autofocus>
    <br>
    <label for="name">メールアドレス</label>
    <input type="text" name="mail" placeholder="メールアドレス" class="form-control" required autofocus>
    <br>
    <label for="address">住所</label>
    <input type="text" name="address" placeholder="ご住所" class="form-control" required>
    <br>
    <label for="tel">電話番号</label>
    <input type="tel" name="tel" placeholder="お電話番号" class="form-control" required>
    <br>
    <input type="submit" value="登録" class="form-control-sm">
</form>
@endsection

@section('footer')
copyright 2022 HotelLaravel.
@endsection

