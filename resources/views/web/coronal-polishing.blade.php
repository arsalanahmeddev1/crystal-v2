@extends('web/layouts.app')
@section('title', 'Coronal Polishing')

@section('content')
    <section class="dental-assistant-banner inner-banner mini-banner hd-reduce-banner">
        <div class="container">
            <h1 class="">Coronal Polishing $ Fluoride Application</h1>
        </div>
    </section>

    <section class="training-sec program-outline-sec py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12 place-items-center">
                <div class="col-span-full pr-7 order-2 xl:col-span-6 xl:order-1">
                    <span class="hd-sm flex justify-center lg:justify-start">Dental Assistant Program Outline</span>
                    <h4 class="!text-[28px]">Coronal Polishing & Fluoride Application Course
                    </h4>
                    <p class="text-lightBlack mb-0">
                        When you add coronal polishing and fluoride application to your resume, you’re not just checking off
                        another skill—you’re increasing your value, and making yourself more competitive in the job market.
                        Our 2-week intensive course is designed to give you the hands-on training and confidence needed to
                        perform these procedures like a professional.
                    </p>
                </div>

                <div class=" col-span-full mb-10 order-1 xl:col-span-6 xl:order-2 xl:mb-0">
                    <div class="section-img-wrapper w-fit mx-auto">
                        <img src="{{ asset('web/images/coronal-polishing-section-img.png') }}" class="traning-center-img"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="max-w-[650px]">
                <h2 class="font-bold text-[30px] font-inter ">What to Expect in Our 6-Week Program

                </h2>
                <p class="text-[16px] mb-[10px]">
                    Our curriculum is designed to combine classroom learning, hands-on lab training, and real-world
                    experience through our on-site externship program.


                </p>
                <ul class="program-list">
                    <li class=""><b>Didactic Lab Training</b><span> – Learn both the theory and hands-on application
                            of dental assisting.</span></li>
                    <li class=""><b>On-Site Observation</b><span> – Spend a day in a real dental office and experience
                            the
                            workflow.</span></li>
                    <li class=""><b>Professional Environment</b><span> – Train in a modern facility equipped with the
                            latest dental
                            technology, including:</span>
                        <ul class="program-list">
                            <li class=""><b>Digital Radiology Pano Units</b></li>
                            <li class=""><b>CAD/CAM System with Intraoral Scanner
                                    Milling Unit</b></li>
                            <li class=""><b>Fully Functional Dental Chairs Lab
                                    Equipment</b></li>
                        </ul>
                    </li>
                </ul>
                <h2 class="font-bold text-[30px] font-inter mb-[10px]">Professionalism & Attire
                </h2>
                <p>
                    Students are required to maintain a <b>professional demeanor</b> throughout the program. This includes:
                </p>
                <ul class="check-list">
                    <li>Wearing <b>clinical attire (scrubs)</b> during training
                    </li>
                    <li>Having <b>long hair pulled back</b> for hygiene and safety
                    </li>
                    <li>
                        Wearing <b>clean, closed-toe shoes</b>
                    </li>
                    <li>Using provided <b>gloves, masks, safety goggles, and all disposable supplies</b></li>
                </ul>
                <h2 class="font-bold text-[30px] font-inter my-[10px]">Externship

                </h2>
                <p>
                    During your <span class="font-bold">2-week training</span>, you’ll complete <span class="font-bold">a
                        minimum of 8 hours of externship</span> at one of our partner dental offices. This opportunity
                    allows you to:
                </p>
                <ul class="check-list">
                    <li>Apply the skills you’ve learned in a real dental setting
                    </li>
                    <li>Observe experienced dental professionals in action
                    </li>
                    <li>
                        Gain valuable experience that makes you stand out to employers
                    </li>
                </ul>
                <h2 class="font-bold text-[30px] font-inter my-[10px]">Flexible Enrollment

                </h2>
                <p class="text-[16px] mb-[40px]">
                    Enrollment remains open until <span class="font-bold">two days before the next program start
                        date</span>. The program runs <span class="font-bold">continuously for 2 weeks</span>, except for
                    major holidays (Christmas, New Year, Independence Day, Memorial Day, Labor Day, Easter). If a class
                    falls on a holiday, it will be rescheduled accordingly.
                </p>
                <div class="flex ">
                    <a href="" class="primary-btn btn bg-grey capitalize">Class Schedule-CLICK HERE</a>
                </div>
            </div>

            <div class="program-cards-container pb-24">
                <div class="program-card card-light bg-grey">
                    <h4 class="hd-sm">Program Cost & Payment Options
                    </h4>
                    <p class="text-lightBlack font-kod">
                        We believe in making education <b>affordable and accessible</b>, <br> which is why we offer
                        <b>flexible payment options</b> to fit your budget.
                    </p>
                    <h5 class="text-[28px] my-[20px] font-bold">Program Tuition Breakdown
                    </h5>
                    <ul class="check-list">
                        <li><span>Dental Assisting Program:</span> $4,100.00
                        </li>
                    </ul>
                    <ul class="program-list">
                        <li>$100.00 <span>Registration Fee</span></li>
                        <li>$3,300.00 <span>Instructional Fees & Tuition</span></li>
                        <li>$700.00 <span>Supplies & Clinical Materials</span></li>
                    </ul>
                    <ul class="check-list mb-[20px]">
                        <li class=""><span>Expanded Function Dental Assistant (EFDA) Program:</span> $2,100.00
                        </li>
                        <li class=""><span>Coronal Polishing & Fluoride Application Course:</span> $675.00</li>
                        <li class=""><span>Nitrous Oxide Course:</span> $299.00</li>
                    </ul>
                    <p class="font-kod"><span class="font-bold">Deposit Required:</span> $337.50 at the time of enrollment
                        to
                        secure your spot.</p>

                    <h5 class="text-[28px] my-[20px] font-bold">Payment Options Available
                    </h5>
                    <ul class="check-list mb-[20px]">
                        <li class=""><span>Cash, Check, or Credit Card</span> (Visa, Mastercard, Discover, American
                            Express)
                        </li>
                        <li class=""><span>Consumer Financing Available</span> (Third-Party Financing)</li>
                    </ul>

                </div>
                <div class="program-card card-light bg-grey">
                    <h4 class="hd-sm">Admissions Requirements</h4>
                    <p>To enroll, students must provide:
                    </p>
                    <ul class="check-list mb-[20px]">
                        <li class=""><span>Proof of GED, High School Diploma, or Higher Academic Education</span>
                        </li>
                        <li class=""><span>Hepatitis B Vaccination</span> (Recommended but not required)</li>
                    </ul>
                    <p class="font-kod mb-[20px]">
                        For students enrolling in the <span class="font-bold">EFDA Program</span>, proof of <span
                            class="font-bold">dental assistant certification OR current employment in a dental office</span>
                        is required.
                    </p>
                    <div class="mb-[30px]">
                        <span class="font-bold"> Contact Us for Enrollment: <a href="mailto:dentalassistingofindy@gmail.com"
                                class="text-[#c36] font-normal">dentalassistingofindy@gmail.com</a>
                        </span>
                    </div>
                    <p class="font-bold mb-[20px]">What’s Included in Your Training?</p>
                    <p class="mb-[30px]">We provide everything you need to succeed, including:
                    </p>
                    <ul class="check-list mb-[20px]">
                        <li class=""><span>Textbook Rental</span>
                        </li>
                        <li class=""><span>All Training Supplies & Equipment</span>
                        <li class=""><span>Use of Instruments & Dental Materials</span>
                        <li class=""><span>Certification of Completion</span>
                    </ul>

                </div>
            </div>


        </div>
    </section>
    <section class="form-sec pb-[50px]">
        <div class="appointment-form-wrapper">
            <div class="container">
                <h4 class="hd-medium mx-auto max-w-[740px] mb-[30px]">
                    Coronal Polishing & Fluoride Application Form
                </h4>
                <form id="appointment-form lightBlack font-semibold">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2 sm:col-span-1">
                            <input type="text" id="full-name" placeholder="Your Full Name">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="text" id="address" placeholder="Address">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="text" id="city" placeholder="City">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="text" id="zip" placeholder="Zip">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="text" id="birthday" placeholder="Birthday">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="email" id="email" placeholder="Email">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="tel" id="phone-no" placeholder="Phone No">
                        </div>
                        <div class="relative col-span-2 sm:col-span-1">
                            <select class="appearance-none w-full px-4 py-2 border border-gray-300 rounded-md">
                                <option value="">Select Education Level</option>
                                <option value="">High School</option>
                                <option value="">Bachelor’s</option>
                                <option value="">Master’s</option>
                            </select>
                            <div class="select-icon"> <i class="fa-solid fa-chevron-down"></i></div>
                        </div>
                        <div class="relative col-span-2">
                            <select class="appearance-none w-full px-4 py-2 border border-gray-300 rounded-md">
                                <option value="">Select Education Level</option>
                                <option value="">High School</option>
                                <option value="">Bachelor’s</option>
                                <option value="">Master’s</option>
                            </select>
                            <div class="select-icon"> <i class="fa-solid fa-chevron-down"></i></div>
                        </div>

                    </div>
                    <a href="" class="btn-primary btn capitalize bg-grey block w-fit mt-10 mx-auto">Requests
                        info</a>
                </form>
            </div>
        </div>
    </section>
@endsection
