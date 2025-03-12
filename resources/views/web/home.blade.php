@extends('web/layouts.app')
@section('title', 'Home')

@section('content')
    <section class="hero-banner">
        <div class="container">
            <div class="flex flex-wrap justify-center  md:justify-between pb-[40px]   lg:pb-[111px] xxl:pb-[243px]">
                <div>
                    <h1 class="text-[30px] font-medium text-center lg:text-left text-white uppercase mb-[16px]">Become a
                        Skilled Dental Assistant - <br>Hands-On Training for a Rewarding Career</h1>
                    <p class="text-white max-w-[608px] 3xl:max-w-[876px] mb-[16px]">Dental assisting school of Indianapolis
                        offers you training for a career that’s high in demand, offers stability, and allows you to make a
                        real difference in people’s lives. We focus on real-world skills that makes you job-ready,
                        confident, and a valuable asset to any dental team.</p>
                    <div class="flex items-center gap-[10px] justify-center lg:justify-start mb-[10px] lg:mb-0 ">
                        <a href="" class="btn-primary btn block text-center">REQUEST ENROLLMENT</a>
                        <a href="" class="btn-primary btn btn-blur !text-white !text-[18px] !font-medium">Contact
                            Us</a>
                    </div>
                </div>
                <div>
                    <p class="lg:max-w-[425px]  mb-[40px] text-white text-center lg:text-right">
                        Get hands-on, practical training that prepares you for success in a real dental office. We give you
                        the confidence and skills that you need to step into the workforce immediately.
                    </p>
                    <a href="javascript:;"
                        class="btn-transparent btn flex justify-center lg:ml-auto  lg:max-w-[206px] text-[18px]">Class
                        Schedule</a>
                </div>
            </div>
            <div class="flex md:justify-between text-center md:text-start justify-center md:flex-nowrap flex-wrap ">
                <h2
                    class="text-[30px] md:text-[50px] leading-[30px] lg:leading-[50px] xxl:leading-[90px]  xxl:text-[80px]  text-white italic font-bold max-w-[871px]  uppercase">
                    Learn from Industry Experts!
                </h2>
                <div class="flex items-center flex-col relative">
                    <div class="flex items-center gap-[20px]">
                        <span class="text-white text-[50px]">10k+</span>
                        <div class="h-[35px] w-[2px] bg-white opacity-[30%] mt-[-18px]"></div>
                        <p class="max-w-[74px] mt-[-18px] leading-[19px] text-white">satisfied customer</p>
                    </div>
                    <ul class="satis-profiles-list flex items-center justify-center">
                        <li class="absolute top-[80px] right-[120px] w-full max-w-[50px] z-[1]"><img
                                src="{{ asset('web/images/satis-profile-1.png') }}" alt=""></li>
                        <li class="absolute top-[80px] right-[78px] w-full max-w-[50px] z-[2]"><img
                                src="{{ asset('web/images/satis-profile-2.png') }}" alt=""></li>
                        <li class="absolute top-[80px] right-[38px] w-full max-w-[50px] z-[3]"><img
                                src="{{ asset('web/images/satis-profile-3.png') }}" alt=""></li>
                        <li class="absolute top-[80px] right-[-2px] w-full max-w-[50px] z-[4]"><img
                                src="{{ asset('web/images/satis-profile-4.png') }}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="marque-sec bg-grey py-[16px]">
        <marquee behavior="scroll" direction="left" scrollamount="10">
            <div class="flex items-center justify-between gap-x-[80px]">
                <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of
                    indianapolis</span>
                <img src="{{ asset('web/images/cap.svg') }}" width="40" height="40" alt="cap" />
                <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of
                    indianapolis</span>
                <img src="{{ asset('web/images/cap.svg') }}" width="40" height="40" alt="cap" />
                <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of
                    indianapolis</span>
                <img src="{{ asset('web/images/cap.svg') }}" width="40" height="40" alt="cap" />
            </div>
        </marquee>
    </section>
    @include('web/partials.training')
    @include('web/partials.achievement')

    <div class="grey-gredient py-[130px]">
        <section class="explore-sec pb-[120px]">
            <div class="container">
                <div
                    class="flex flex-col md:flex-row  text-center lg:text-start  xxl:flex-wrap items-center justify-between mb-[80px] gap-y-[20px]">
                    <div>
                        <span class="hd-sm">Explore our programs
                        </span>
                        <h2 class="text-[40px] italic font-bold max-w-[450px] ">Training program that gets you real work
                        </h2>
                    </div>
                    <div>
                        <p class="max-w-[379px]">
                            We make learning worth it by combining straightforward lessons, hands-on practice, and
                            real-world skills. If you want a fast-track career in dentistry with training that actually
                            prepares you for the job, this is the place for you.


                        </p>
                    </div>
                    <div>
                        <a href="" class="primary-btn btn bg-grey">Explore All</a>
                    </div>
                </div>
                <div class="border border-grey mb-[80px]"></div>
                <div class="relative">
                    <div class="explore-card-container explore-card-slider">
                        <div class="explore-card-wrapper card-light  ">
                            <div class="training-list-icon mb-[40px]">
                                <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                            </div>
                            <h4 class="hd-sm mb-[30px]">Chairside <br>
                                Assisting</h4>
                            <p class="mb-[50px]">
                                Learn how to assist the dentist during various procedures, ensuring smooth and efficient
                                patient care.


                            </p>
                            <a href="" class="uppercase font-semibold">read more <span
                                    class="ml-[10px] arrow-right"><i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                        <div class="explore-card-wrapper card-light">
                            <div class="training-list-icon mb-[40px]">
                                <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                            </div>
                            <h4 class="hd-sm mb-[30px]">Expanded Functions Dental Assisting (EFDA)
                            </h4>
                            <p class="mb-[50px]">
                                Learn how a filling should be placed but also gain hands-on experience performing them
                                yourself.


                            </p>
                            <a href="" class="uppercase font-semibold">read more <span
                                    class="ml-[10px] arrow-right"><i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                        <div class="explore-card-wrapper card-light">
                            <div class="training-list-icon mb-[40px]">
                                <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                            </div>
                            <h4 class="hd-sm mb-[30px]">Coronal Polishing & Fluoride Application
                            </h4>
                            <p class="mb-[50px]">
                                Gain the necessary skills to properly polish teeth using a prophy cup and apply fluoride
                                treatments.


                            </p>
                            <a href="" class="uppercase font-semibold">read more <span
                                    class="ml-[10px] arrow-right"><i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                        <div class="explore-card-wrapper card-light">
                            <div class="training-list-icon mb-[40px]">
                                <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                            </div>
                            <h4 class="hd-sm mb-[30px]">Dental
                                Ethics &
                                Law</h4>
                            <p class="mb-[50px]">
                                Know your professional responsibilities, patient rights, and legal guidelines to ensure
                                compliance with dental regulations.


                            </p>
                            <a href="" class="uppercase font-semibold">read more <span
                                    class="ml-[10px] arrow-right"><i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="slick-arrows-wrapper">
                        <div class="slick-arrow slick-arrow-left">
                            <i class="fa-solid fa-angle-left"></i>
                        </div>
                        <div class="slick-arrow slick-arrow-right">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-sec pb-[170px]">
            <div class="container">
                {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]"> --}}
                <div class="relative">
                    <div class="videos-slider">
                        <div class="video-card-wrapper ">
                            <a data-fancybox='gallery' href="{{ asset('web/videos/video-1.mp4') }}">
                                <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-01.png') }}" />
                                <div class="absolute flex justify-center items-center flex-col inset-0">
                                    <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                            class="fa-solid fa-play"></i></button>
                                </div>
                            </a>
                        </div>
                        <div class="video-card-wrapper">
                            <a data-fancybox="gallery" href="{{ asset('web/videos/video-2.mp4') }}">
                                <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-02.png') }}" />
                                <div class="absolute flex justify-center items-center flex-col inset-0">
                                    <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                            class="fa-solid fa-play"></i></button>
                                </div>
                            </a>
                        </div>
                        <div class="video-card-wrapper">
                            <a data-fancybox='gallery' href="{{ asset('web/videos/video-3.mp4') }}">
                                <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-03.png') }}" />
                                <div class="absolute flex justify-center items-center flex-col inset-0">
                                    <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                            class="fa-solid fa-play"></i></button>
                                </div>
                            </a>
                        </div>
                        <div class="video-card-wrapper">
                            <a data-fancybox='gallery' href="{{ asset('web/videos/video-4.mp4') }}">
                                <img class="card-img-top" src="{{ asset('web/images/video-tumbnail-04.png') }}" />
                                <div class="absolute flex justify-center items-center flex-col inset-0">
                                    <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                            class="fa-solid fa-play"></i></button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-arrows-wrapper">
                        <div class="slick-arrow video-slick-arrow-left">
                            <i class="fa-solid fa-angle-left"></i>
                        </div>
                        <div class="slick-arrow video-slick-arrow-right">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="positive-review-sec ">
            <div class="container container-custom">
                <div class="grid grid-cols-1 xl:grid-cols-[auto_auto_auto] justify-between gap-[20px]" 
                data-tabs-toggle="#review-images">
               <!-- Left Column: Review Cards -->
               <div class="flex flex-col md:flex-row gap-[40px] order-2 xl:order-1">
                   <div>
                       <!-- Card 1 -->
                       <div class="positive-review-card card-light mb-[40px] cursor-pointer" 
                            data-tabs-target="#review-image-1" 
                            role="tab" 
                            aria-controls="review-image-1" 
                            aria-selected="true">
                           <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                           <p class="text-20 mb-[40px] max-w-[325px]">
                               I can’t say enough good things about this program! I was nervous about starting a new career, but the hands-on training made all the difference. Instead of just sitting in a classroom, we actually practiced everything and by the time I finished, I felt completely confident and job-ready.
                           </p>
                           <div class="flex items-center gap-[24px]">
                               <div>
                                   <img src="{{ asset('web/images/review-profile-1.png') }}" class="w-[70px] h-[70px]" alt="">
                               </div>
                               <div>
                                   <span class="hd-sm mb-[14px]">Jess Mauboy.</span>
                               </div>
                           </div>
                       </div>
                       <!-- Card 2 -->
                       <div class="positive-review-card card-light cursor-pointer" 
                            data-tabs-target="#review-image-2" 
                            role="tab" 
                            aria-controls="review-image-2" 
                            aria-selected="false">
                           <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                           <p class="text-20 mb-[40px] max-w-[325px]">
                               I wanted a career change but didn’t have years to spend in school. This program was exactly what I needed! The flexible payment plan made it affordable, and I never felt like I was just another student. The instructors actually take the time to teach you one-on-one, and the job placement assistance helped me land my first dental assisting job right after finishing.
                           </p>
                           <div class="flex items-center gap-[24px]">
                               <div>
                                   <img src="{{ asset('web/images/review-profile-1.png') }}" class="w-[70px] h-[70px]" alt="">
                               </div>
                               <div>
                                   <span class="hd-sm mb-[14px]">Terry Knowles.</span>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <!-- Card 3 -->
                       <div class="positive-review-card card-light mb-[40px] cursor-pointer" 
                            data-tabs-target="#review-image-3" 
                            role="tab" 
                            aria-controls="review-image-3" 
                            aria-selected="false">
                           <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                           <p class="text-20 mb-[40px] max-w-[325px]">
                               I was worried about finding a job after finishing, but this program goes above and beyond to help with job placement. They connected me with local dental offices and even helped with my resume and interview prep. I got hired right after finishing the program! The training is super practical and hands-on, so when I started working, I felt 100% ready. If you’re looking for a real career with job security, this is the way to go!
                           </p>
                           <div class="flex items-center gap-[24px]">
                               <div>
                                   <img src="{{ asset('web/images/review-profile-1.png') }}" class="w-[70px] h-[70px]" alt="">
                               </div>
                               <div>
                                   <span class="hd-sm mb-[14px]">Mark Schuler</span>
                               </div>
                           </div>
                       </div>
                       <!-- Card 4 -->
                       <div class="positive-review-card card-light cursor-pointer" 
                            data-tabs-target="#review-image-4" 
                            role="tab" 
                            aria-controls="review-image-4" 
                            aria-selected="false">
                           <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                           <p class="text-20 mb-[40px] max-w-[325px]">
                               I had no experience in dentistry before this, but this program made me feel so prepared. Everything is hands-on, and they teach you the skills that dentists actually look for. What I loved most was that the instructors came from the field themselves, so they knew exactly what we needed to succeed. Also, the flexible payments made it possible for me to enroll without stressing about the cost. Best decision I’ve made!
                           </p>
                           <div class="flex items-center gap-[24px]">
                               <div>
                                   <img src="{{ asset('web/images/review-profile-1.png') }}" class="w-[70px] h-[70px]" alt="">
                               </div>
                               <div>
                                   <span class="hd-sm mb-[14px]">Brianna.</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           
               <!-- Right Column: Testimonials Header and Image Container -->
               <div class="order-1 xl:order-2">
                   <div class="flex-col text-center lg:text-start">
                       <h3 class="hd-sm mb-[30px]">testimonials</h3>
                       <h4 class="hd-medium mb-[30px] max-w-[469px]">Positive Review From Our Students</h4>
                       <p class="max-w-[407px] mb-[40px]">
                           Dental assisting is a high-demand career, and many of our students get hired right after finishing the program.
                       </p>
                       <div class="flex justify-center lg:justify-start mb-[40px]">
                           <a href="" class="primary-btn btn bg-grey capitalize">explore all</a>
                       </div>
                   </div>
           
                   <!-- Image Container with Flowbite Tabs -->
                   <div id="review-images" class="relative">
                       <img src="{{ asset('web/images/md-img-1.png') }}" 
                            class="rounded-[20px] w-[469px] h-[477px] object-cover" 
                            id="review-image-1" 
                            role="tabpanel" 
                            aria-labelledby="review-image-1">
                       <img src="{{ asset('web/images/md-img-2.png') }}" 
                            class="rounded-[20px] w-[469px] h-[477px] object-cover hidden" 
                            id="review-image-2" 
                            role="tabpanel" 
                            aria-labelledby="review-image-2">
                       <img src="{{ asset('web/images/md-img-3.png') }}" 
                            class="rounded-[20px] w-[469px] h-[477px] object-cover hidden" 
                            id="review-image-3" 
                            role="tabpanel" 
                            aria-labelledby="review-image-3">
                       <img src="{{ asset('web/images/md-img-4.png') }}" 
                            class="rounded-[20px] w-[469px] h-[477px] object-cover hidden" 
                            id="review-image-4" 
                            role="tabpanel" 
                            aria-labelledby="review-image-4">
                   </div>
               </div>
           </div>
            </div>
        </section>
    </div>
    @include('web.partials.blogs')
@endsection
