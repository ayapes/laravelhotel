@extends('layouts.hotelapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','ホテルララベル予約管理システム')

@section('menubar','利用者一覧表')

@section('content')

<div class="title box">
    <p><span>ID</span></p>
    <p><span>名前</span></p>
    <p><span>メアド</span></p>
    <p><span>住所</span></p>
    <p><span>電話番号</span></p>
</div>
@foreach($items as $item)
<div class="box name">
<p><span>{{$item->id}}</span></p>
<p><span>{{$item->name}}</span></p>
<p><span>{{$item->mail}}</span></p>
<p><span>{{$item->address}}</span></p>
<p><span>{{$item->tel}}</span></p>
</div>
@endforeach

@endsection

@section('footer')
copyright 2022 HotelLaravel.
@endsection

