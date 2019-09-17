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
            <h2 class="pt-64">누구나 즐기는</h2>
            <h1>자유로운 음악 생활</h1>
            <button class="mt-6 bg-transparent py-4 px-6 border rounded text-lg font-semibold text-white hover:bg-white hover:text-black">
                사서고생 하러 가기
            </button>
        </video-bg>
    </section>

    <section>
        <div class="container mx-auto pt-16">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3 px-2 mb-6 text-center">
                    <i class="xi-emoticon-cool-o xi-3x"></i>
                    <div class="mt-4">최대 10명이서 한 팀으로</div>
                </div>

                <div class="w-full md:w-1/3 px-2 mb-6 text-center">
                    <i class="xi-music xi-3x"></i>
                    <div class="mt-4">커버곡 연주, 자작곡, 영상등 자유롭게</div>
                </div>

                <div class="w-full md:w-1/3 px-2 mb-6 text-center">
                    <i class="xi-equalizer-thin xi-3x"></i>
                    <div class="mt-4">음악을 즐겨보세요</div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <landing-grid-component class="pt-10"></landing-grid-component>
    </section>

    <footer class='bg-gray-900 w-full border-t border-grey mt-10 p-4 text-white'>
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
