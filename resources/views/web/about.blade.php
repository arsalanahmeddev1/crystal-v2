@extends('web/layouts.app')
@section('title', 'About')

@section('content')
    <section class="about-banner inner-banner bg-center hd-reduce-banner">
        <div class="container">
            <h1 class="">Dentistry is hands-on, so should be your training</h1>
            <p class="text-center text-white">
                We don’t believe in just reading from textbooks and hoping for the best. Our program is built around practical, real-world experience where you’ll learn to do things practically. We know what it’s like to want something more, to look for a career that offers stability, good pay, and real growth without spending years in school. That’s why we created a dental assisting program that’s practical, hands-on, and designed to get you job-ready fast. Our instructors have been where you are. They started in short-term dental assisting programs just like ours and built thriving careers in the field. Now, they’re dedicated to helping others do the same.
            </p>
        </div>
    </section>
    @include('web.partials.training')
    @include('web/partials.achievement')
    <section class="video-sec pb-[170px]">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-[30px]">
                <div class="video-card-wrapper ">
                    <a data-fancybox='gallery' href="web/videos/video-5.mp4">
                        <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-05.png') }}" />
                        <div class="absolute flex justify-center items-center flex-col inset-0">
                            <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                    class="fa-solid fa-play"></i></button>
                        </div>
                    </a>
                </div>
                <div class="video-card-wrapper">
                    <a data-fancybox="gallery" href="{{ asset('web/videos/video-6.mp4') }}">
                        <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-06.png') }}" />
                        <div class="absolute flex justify-center items-center flex-col inset-0">
                            <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                    class="fa-solid fa-play"></i></button>
                        </div>
                    </a>
                </div>
                <div class="video-card-wrapper">
                    <a data-fancybox='gallery' href="{{ asset('web/videos/video-7.mp4') }}">
                        <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-07.png') }}" />
                        <div class="absolute flex justify-center items-center flex-col inset-0">
                            <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                    class="fa-solid fa-play"></i></button>
                        </div>
                    </a>
                </div>
                <div class="video-card-wrapper">
                    <a data-fancybox='gallery' href="{{ asset('web/videos/video-8.mp4') }}">
                        <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-08.png') }}" />
                        <div class="absolute flex justify-center items-center flex-col inset-0">
                            <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                    class="fa-solid fa-play"></i></button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    @include('web/partials.blogs')

@endsection

