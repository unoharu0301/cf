@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<main>
    @foreach ($shops as $shop)
    <div class="shop_content">
        <div class="shop-box">
            <div class="shop-box_img">
                <img src="/img/{{$shop->image}}" alt="写真" class="shop-box_img">
            </div>
            <div class="shop-box_content">
                <h2 class="shop-box_content-name">{{$shop->shopname}}</h2>
                <p class="shop-box_content-area">#{{$shop->area}}</p>
                <p class="shop-box_content-category">#{{$shop->category}}</p>
                <a href="/detail/{{$shop->shopid}}" class="detail">詳しく見る</a>
            </div>
        </div>
    </div>
</main>
@endforeach
@endsection