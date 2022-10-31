@extends('layouts.hotelapp')
{{-- 指定したファイルからレイアウトを継承--}}
@section('title','ホテルララベル予約管理システム')

@section('menubar','予約一覧表')

@section('content')

<div class="title box2">
    <p><span>ID</span></p>
    <p><span>名前</span></p>
    <p><span>住所</span></p>
    <p><span>大人</span></p>
    <p><span>子供</span></p>
    <p><span>チェックイン</span></p>
    <p><span>チェックアウト</span></p>
</div>
@foreach($items as $item)
<div class="box2 name">
<p><span>{{$item->id}}</span></p>
<p><span>{{$item->guest->name}}</span></p>
<p><span>{{$item->guest->address}}</span></p>
<p><span>{{$item->num_adults}}</span></p>
<p><span>{{$item->num_kids}}</span></p>
<p><span>{{$item->checkin}}</span></p>
<p><span>{{$item->checkout}}</span></p>
</div>
@endforeach

@endsection

@section('footer')
copyright 2022 HotelLaravel.
@endsection

