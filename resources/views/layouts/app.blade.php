<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="누구나 즐기는 자유로운 음악 생활 - 수유리콜라보 사서고생">
    <meta name="keywords" content="음악, 음악생활, 도봉구, 강북구, 기타, 베이스, 건반, 키보드, 드럼, 사서고생">
    <meta name="description" content="자유롭게 모여서 음악을 할 수 있는 곳입니다. 누구든지 음악을 즐기는 마음만 있다면 환영합니다.">
    <meta name="robots" content="index,follow">
    <meta property="og:type" content="website">
    <meta property="og:title" content="누구나 즐기는 자유로운 음악 생활 - 수유리콜라보 사서고생">
    <meta property="og:description" content="자유롭게 모여서 음악을 할 수 있는 곳입니다. 누구든지 음악을 즐기는 마음만 있다면 환영합니다.">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta itemprop="name" content="누구나 즐기는 자유로운 음악 생활 - 수유리콜라보 사서고생">
    <meta itemprop="description" content="자유롭게 모여서 음악을 할 수 있는 곳입니다. 누구든지 음악을 즐기는 마음만 있다면 환영합니다.">
    <meta itemprop="image" content="">

    <meta name="naver-site-verification" content="8139796adbd284d89f27a0fcaf8b3b8d8f0c940f"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>누구나 즐기는 자유로운 음악 생활 - 수유리콜라보 사서고생</title>

    <!-- Scripts -->
    @if (app()->environment('local'))
        <script src="{{ mix('js/app.js') }}" defer></script>
    @else
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endif

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148720967-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-148720967-1');
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">

    <!-- Styles -->
    @if (app()->environment('local'))
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif

    <!-- Add icon library -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

    <link rel="canonical" href="{{ url()->current() }}">
</head>
<body>
<div id="app">
    @yield('content')

    @include('layouts.footer')
</div>
</body>
</html>
