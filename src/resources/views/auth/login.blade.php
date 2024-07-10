@extends('layouts.auth')


@section('content')
<div class="login-form">
    <h2 class="login-form_header">Login</h2>
    <div class="login-form_content">
        <form action="/login" method="post" class="login-form_form">
        @csrf
            <div class="login-form_table">
                <input type="email" class="login-form_input" name="email" id="email" placeholder="Email">
                <p class="login-form_error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form_table">
                <input type="password" class="login-form_input" name="password" id="password" placeholder="Password">
                <p class="login-form_error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <input type="submit" name="login-form_button" value="ログイン">
        </form>
    </div>
</div>
@endsection