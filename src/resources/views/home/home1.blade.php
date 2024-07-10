@extends('layouts.app')

@section('content')
<div class="home1_link">
    <a href="/" class="home">Home</a>
    <form action="/logout" method="post">
        @csrf
        <input type="submit" class="logout" value="Logout">
    </form>
    <a href="/mypage" class="mypage">Mypage</a>
</div>
@endsection