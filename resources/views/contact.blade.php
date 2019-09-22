@extends('layouts.app')

@section('content')
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
@endsection