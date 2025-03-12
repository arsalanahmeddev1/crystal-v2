@extends('web/layouts.app')
@section('title', 'Payment Options')

@section('content')
<section class="dental-assistant-banner inner-banner mini-banner">
    <div class="container">
        <h1 class="">Payment Options</h1>
    </div>
</section>

<section class="training-sec program-outline-sec py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-full order-2 xl:col-span-6 xl:order-1">
                <h4 class="font-bold text-[30px] font-inter ">Making your Dental Career Affordable

                </h4>
                <p class="text-lightBlack mb-[20px]">
                    Cost should not hold you back from achieving your dream career. We understand that choosing a career path is a big decision, and finances can often feel like a roadblock. For this very reason, we’ve ]we’ve designed flexible, interest-free payment options to make it easier for you to take the next step in your dental career with zero financial stress. It’s totally on you, if you prefer to pay upfront or break your tuition into manageable payments, we’re here to make sure you have access to quality education simple, convenient and affordable
                </p>
               

                <h5 class="font-bold text-[30px] font-inter ">
                    Why We Make Payment Flexibility a Priority

                </h5>
               <p>
                We believe everyone deserves the opportunity to advance their career, regardless of financial background. The dental field is in high demand, and with the right training, you can secure a stable, rewarding job in just a matter of weeks. We don’t want finances to hold you back from that opportunity.
               </p>
            </div>

            <div class=" col-span-full mb-10 order-1 xl:col-span-6 xl:order-2 xl:mb-0">
                <div class="section-img-wrapper w-fit mx-auto">
                    <img src="{{ asset('web/images/payment-options-section-img.png') }}" class="traning-center-img" alt="">
                </div>
            </div>
        </div>



        <div class="program-cards-container">
            <div class="program-card card-light bg-grey">
                <h4 class="hd-sm">Program Cost</h4>
                <ul>
                    <li>Dental Assisting Program —- $4100.00.</li>
                    <li>Expanded Function Program -$2100.00</li>
                    <li>Coronal polishing & fluoride application – $675.00</li>
                    <li>Nitrous Oxide course – $299.00</li>
                </ul>
            </div>
            <div class="program-card card-light bg-grey">
                <h4 class="hd-sm">Admissions Requirements
                </h4>
                <p class="mb-[20px]">
                    Proof of GED, High School Diploma, or higher academic education.
                </p>
                <p class="mb-[20px]">
                    Hepatitis B vaccination is strongly recommended but not required.
                </p>
                <p class="mb-[20px]">
                    For enrolling in the EFDA Program, Dental Assistant training certification is required or must be working in a dental office at this time.
                </p>
                <span class="font-bold"> Contact Us for Enrollment: <a href="mailto:dentalassistingofindy@gmail.com"
                    class="text-[#c36] font-normal">dentalassistingofindy@gmail.com</a>
            </span>

            </div>
        </div>

        <div class="dental-info-cards">
            <div class="card-light payment-card bg-grey">
                <h5 class="hd-sm mb-3">No Student Loan Debt

                </h5>
                <p>
                    Traditional schooling can leave you with massive debt. Our interest-free plans help you avoid that burden.


                </p>
            </div>

            <div class="card-light payment-card bg-grey">
                <h5 class="hd-sm mb-3">
                    No Credit Check Required 

                </h5>
               <p>
                We don’t let past financial situations stop you from pursuing your future.


               </p>
            </div>

            <div class="card-light payment-card bg-grey">
                <h5 class="hd-sm mb-3">Fast Return on Investment 
                </h5>
                <p>
                    Unlike years of college, our programs help you start working and earning quickly.
                </p>
            </div>
        </div>
        <div class="mt-[60px]">
            <ul class="check-list check-lg mb-[10px]">
                <li>Pay in Full – $4,000</li>
            </ul>
            <ul class="program-list pl-[30px] mb-[10px]">
                <li><span class="font-bold">Deposit:</span> $4,000 one-time payment due one week before class starts.</li>
            </ul>
            <ul class="check-list check-lg mb-[10px]">
                <li>12-Month Interest-Free Plan (No Credit Check)!</li>
            </ul>
            <ul class="program-list pl-[30px] mb-[10px]">
                <li><span class="font-bold">Deposit:</span> $250 due at enrollment to secure your seat.</li>
                <li><span class="font-bold">Pre-Class Payment:</span> $350 due two weeks before the class starts.</li>
                <li><span class="font-bold">Monthly Payment:</span> $284 per month (automatically withdrawn on the <span>19th of each month).</span></li>
                <li><span class="font-bold">Total Cost:</span> $4,000 with 0% interest with no credit check required!</li>
            </ul>
            <ul class="check-list check-lg mb-[10px]">
                <li>Make a Custom Plan that Works for you!</li>
            </ul>
            <p class="font-medium">If the above options don’t fit your budget, don’t worry! We can create a custom payment plan to meet your needs & requirements.
            </p>
        </div>
    </div>
</section>


@endsection