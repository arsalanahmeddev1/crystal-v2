@extends('web/layouts.app')
@section('title', 'Gallery')

@section('content')
<section class="dental-assistant-banner inner-banner mini-banner">
    <div class="container">
        <h1 class="">Gallery</h1>
    </div>
</section>

<section class="training-sec program-outline-sec py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-2 gap-x-7 gap-y-5 xl:gap-y-10 gallery-wrapper">
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/md-img-1.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/md-img-2.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/md-img-3.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/md-img-4.png') }}" alt="">
            </div>
        </div>

        <div class="program-cards-container">
            <div class="program-card card-light bg-grey">
                <h4 class="hd-sm">Program Cost</h4>
                <ul>
                    <li class="mb-[10px]">Dental Assisting Program —- $4100.00.</li>
                    <li class="mb-[10px]">Expanded Function Program -$2100.00</li>
                    <li class="mb-[10px]">Coronal polishing & fluoride application – $675.00</li>
                    <li class="mb-[10px]">Nitrous Oxide course – $299.00</li>
                </ul>
            </div>
            <div class="program-card card-light bg-grey">
                <h4 class="hd-sm">Admissions Requirements</h4>
                <ul>
                    <li class="mb-[10px]">Proof of GED, High School Diploma, or higher academic education.</li>
                    <li class="mb-[10px]">Hepatitis B vaccination is strongly recommended but not required.</li>
                    <li class="mb-[10px]">For enrolling in the EFDA Program, Dental Assistant training certification is required or must be working in a dental office at this time.</li>
                    <li class="mb-[10px]"><span class="font-bold"> Contact Us for Enrollment: <a href="mailto:dentalassistingofindy@gmail.com"
                        class="text-[#c36] font-normal">dentalassistingofindy@gmail.com</a>
                </span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection