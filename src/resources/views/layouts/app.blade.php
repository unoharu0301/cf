<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <div class="Rese">
        <header class="header">
            <h1 class="header_heading">Rese</h1>
            <a href="/home1" class="header_link">a</a>
            @yield('link')
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>