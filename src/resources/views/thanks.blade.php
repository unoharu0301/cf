@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css')}}">
@endsection

@section('content')
<h2 class="thanks">ご予約ありがとうございます</h2>
<a href="/" class="backhome">戻る</a>
@endsection