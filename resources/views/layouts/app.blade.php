<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="누구나 즐기는 자유로운 음악 생활 - 수유리콜라보 사서고생">
    <meta name="keywords" content="수유리콜라보, 사서고생, 음악, 음악생활, 밴드, 도봉구, 강북구, 기타, 베이스, 건반, 키보드, 드럼">
    <meta name="description" content="강북구에 있는 수유리콜라보는 자유롭게 모여서 음악을 할 수 있는 곳입니다. 누구든지 즐기는 마음만 있다면 환영합니다.">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="누구나 즐기는 자유로운 음악 생활 - 수유리콜라보 사서고생">
    <meta property="og:description" content="강북구에 있는 수유리콜라보는 자유롭게 모여서 음악을 할 수 있는 곳입니다. 누구든지 즐기는 마음만 있다면 환영합니다.">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <meta itemprop="name" content="누구나 즐기는 자유로운 음악 생활 - 수유리콜라보 사서고생">
    <meta itemprop="description" content="강북구에 있는 수유리콜라보는 자유롭게 모여서 음악을 할 수 있는 곳입니다. 누구든지 즐기는 마음만 있다면 환영합니다.">
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

{{--    <!-- Google Tag Manager -->--}}
{{--    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':--}}
{{--                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],--}}
{{--            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=--}}
{{--            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);--}}
{{--        })(window,document,'script','dataLayer','GTM-NDCQFWM');</script>--}}
{{--    <!-- End Google Tag Manager -->--}}

{{--    <script type="text/javascript">--}}
{{--        (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")--}}
{{--        ;r.type="text/javascript"--}}
{{--        ;r.integrity="sha384-d/yhnowERvm+7eCU79T/bYjOiMmq4F11ElWYLmt0ktvYEVgqLDazh4+gW9CKMpYW"--}}
{{--        ;r.crossOrigin="anonymous";r.async=true--}}
{{--        ;r.src="https://cdn.amplitude.com/libs/amplitude-5.7.1-min.gz.js"--}}
{{--        ;r.onload=function(){if(!e.amplitude.runQueuedFunctions){--}}
{{--            console.log("[Amplitude] Error: could not load SDK")}}--}}
{{--        ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)--}}
{{--        ;function s(e,t){e.prototype[t]=function(){--}}
{{--            this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}--}}
{{--            var o=function(){this._q=[];return this}--}}
{{--            ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]--}}
{{--            ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]--}}
{{--                ;return this}--}}
{{--            ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]--}}
{{--            ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c--}}
{{--            ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","groupIdentify","onInit","logEventWithTimestamp","logEventWithGroups","setSessionId","resetSessionId"]--}}
{{--            ;function v(e){function t(t){e[t]=function(){--}}
{{--                e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}--}}
{{--                for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){--}}
{{--                e=(!e||e.length===0?"$default_instance":e).toLowerCase()--}}
{{--                ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}--}}
{{--            ;e.amplitude=n})(window,document);--}}

{{--        amplitude.getInstance().init("ee9631ba982e6444117f5ec9bf4f0762");--}}
{{--    </script>--}}

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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDCQFWM"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="app">
    @yield('content')

    @include('layouts.footer')
</div>
@yield('script')
</body>
</html>
