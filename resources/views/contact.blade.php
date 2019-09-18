<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @if (app()->environment('local'))
        <script src="{{ mix('js/app.js') }}" defer></script>
    @else
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endif

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
</head>
<body>
<div id="app">
    <section>
        <video-bg :sources="['{{ asset('assets/video/timelapse.mp4') }}']" img="{{ asset('assets/images/bg.jpg') }}">
            <h1 class="pt-48 sm:pt-24 text-5xl sm:text-6xl">010-3066-0209</h1>
            <span class="text-white">or</span>
            <div>
                <img class="w-4/5 xl:w-1/2 inline-block p-4"
                     src="//t1.daumcdn.net/roughmap/imgmap/dd0dfea0069944d84115c409493a910c96fd620bb69d30c68a48875f77f7444e" >
            </div>
        </video-bg>
    </section>

    <footer class='bg-gray-900 w-full border-grey p-4 text-white'>
        <div class="mt-4 font-thin">음악을 좋아하는 분들의 연락을 기다립니다.</div>
        <div class="social-box">
            <i class="xi xi-kakaotalk"></i>
            <i class="xi xi-instagram"></i>
            <i class="xi xi-youtube"></i>
            <i class="xi xi-facebook"></i>
        </div>
        <div class="mt-10 mb-6 copyright">
            <p>&copy 2019 SUYURICOLLABO & idiotLabs</p>
        </div>
    </footer>
</div>
</body>
</html>
