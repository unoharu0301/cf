@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<main>
    <div class="detail_content">
        <div class="detail-left">
            <div class="detail_header">
                <a href="/" class="home">home</a>
                <h2 class="detail_content-name">{{$shop->shopname}}</h2>
            </div>
            <div class="detail_img">
                <img src="/img/{{$shop->image}}" alt="写真" class="shop-box_img">
            </div>
            <div class="detail_content">
                <p class="detail_content-area">#{{$shop->area}}</p>
                <p class="detail_content-category">#{{$shop->category}}</p>
                <p class="detail_content-read">{{$shop->read}}</p>
            </div>
        </div>
        <div class="detail_right">
            <div class="reservation_box">
                <form action="/reservation" method="post">
                    @csrf
                    <h1 class="reservation_box-title">予約</h1>
                    <div>
                        <input type="date" name="date" placeholder="2021/04/01">
                    </div>
                    <div>
                        <input type="time" name="time" placeholder="17:00">
                    </div>
                    <select name="reservation_number">
                        <option value="1人">1人</option>
                        <option value="2人">2人</option>
                        <option value="3人">3人</option>
                        <option value="4人">4人</option>
                        <option value="5人">5人</option>
                        <option value="6人">6人</option>
                        <option value="7人">7人</option>
                        <option value="8人">8人</option>
                        <option value="9人">9人</option>
                    </select>
                    <div>
                        <h3 name="shop_name">{{$shop->shopname}}</h3>
                    </div>
                    <div>
                        <button type="submit" name="reservation" class="btn-submit">予約する</button>
                    </div>

                </form>    
            </div>
        </div>
    </div>
</main>
@endsection
