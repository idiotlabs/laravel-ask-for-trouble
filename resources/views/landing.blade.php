@extends('layouts.app')

@section('content')
    <section>
        <lib-video-background :sources="['{{ asset('assets/video/main-trouble.mp4') }}']" img="{{ asset('assets/images/main-trouble.jpeg') }}">
            <h2 class="pt-48 sm:pt-64">누구나 즐기는</h2>
            <h1 class="text-5xl sm:text-6xl">자유로운 음악 생활</h1>
            <a href="/contact" class="inline-block mt-6 bg-transparent py-4 px-6 border rounded text-lg font-semibold text-white hover:bg-white hover:text-black">
                사서고생 하러 가기
            </a>
        </lib-video-background>
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

{{--    <section>--}}
{{--        <landing-grid-component class="pt-10 mb-10"></landing-grid-component>--}}
{{--    </section>--}}

    <section>
        <div class="masonry pt-10 mb-10">
            @for ($i = 1; $i < 11; $i++)
            <div class="masonry-item">
                <img src="{{ asset('/assets/images/landing/') . '/' . $i . '.jpeg' }}" alt="사서고생 이미지">
            </div>
            @endfor
        </div>
    </section>

@endsection

@section('script')
<script>
    // window.dataLayer = window.dataLayer || [];
    // window.dataLayer.push({
    // 'event': 'onboardMainPage'
    // });

    // function getGridImage(i) {
    //     return (process.env.ASSET_PATH || '') + "/assets/images/landing/" + (i + 1) + ".jpeg";
    // }
</script>
@endsection