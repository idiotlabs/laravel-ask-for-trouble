@extends('layouts.app')

@section('content')
    <section>
        <video-bg :sources="['{{ asset('assets/video/timelapse.mp4') }}']" img="{{ asset('assets/images/bg.jpg') }}">
            <h2 class="pt-48 sm:pt-64">누구나 즐기는</h2>
            <h1 class="text-5xl sm:text-6xl">자유로운 음악 생활</h1>
            <button class="mt-6 bg-transparent py-4 px-6 border rounded text-lg font-semibold text-white hover:bg-white hover:text-black">
                <a href="/contact">사서고생 하러 가기</a>
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
        <landing-grid-component class="pt-10 mb-10"></landing-grid-component>
    </section>
@endsection