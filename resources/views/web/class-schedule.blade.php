@extends('web/layouts.app')
@section('title', 'Schedule')

@section('content')
<section class="dental-assistant-banner inner-banner mini-banner">
    <div class="container">
        <h1 class="">Class Schedule</h1>
    </div>
</section>

<section class="training-sec program-outline-sec py-[80px] lg:py-[120px]">
    <div class="container">
        <!-- General Info -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
            <div class="col-span-1">
                <div class="dental-info-card-wrapper">
                    <div class="card-light dental-info-card bg-grey flex flex-col items-center text-center md:block md:text-start  ">
                        <h5 class="hd-sm mb-3">APPLY DENTAL ASSISTING PROGRAM</h5>
                        <p class="mb-10">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </p>
                        <a href="" class="capitalize text-black font-bold text-[16px] rounded-anchor block w-fit">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="dental-info-card-wrapper">
                    <div class="card-light dental-info-card bg-grey flex flex-col items-center text-center md:block md:text-start  ">
                        <h5 class="hd-sm mb-3">APPLY DENTAL ASSISTING PROGRAM</h5>
                        <p class="mb-10">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </p>
                        <a href="" class="capitalize text-black font-bold text-[16px] rounded-anchor block w-fit">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="dental-info-card-wrapper">
                    <div class="card-light dental-info-card bg-grey flex flex-col items-center text-center md:block md:text-start  ">
                        <h5 class="hd-sm mb-3">APPLY DENTAL ASSISTING PROGRAM</h5>
                        <p class="mb-10">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </p>
                        <a href="" class="capitalize text-black font-bold text-[16px] rounded-anchor block w-fit">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Info -->
        <div class="grid grid-cols-1 lg:grid-cols-3  gap-5 mt-16">
            <div class="col-span-1">
                <div class="dental-info-card-wrapper">
                    <div class="card-light dental-info-card bg-grey">
                        <h5 class="hd-sm mb-[20px] text-center md:text-start">2025 DA class schedule</h5>
                        <div class="schedule-img-wrapper">
                            <img src="{{ asset('web/images/schedule-01.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="dental-info-card-wrapper">
                    <div class="card-light dental-info-card bg-grey">
                        <h5 class="hd-sm mb-[20px] text-center md:text-start">2025 EFDA class schedule</h5>
                        <div class="schedule-img-wrapper">
                            <img src="{{ asset('web/images/schedule-02.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="dental-info-card-wrapper">
                    <div class="card-light dental-info-card bg-grey">
                        <h5 class="hd-sm mb-[20px] text-center md:text-start">CORONAL POLISHING & FLUORIDE
                        </h5>
                        <div class="schedule-img-wrapper">
                            <img src="{{ asset('web/images/schedule-03.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection