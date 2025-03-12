@extends('web/layouts.app')
@section('title', 'Contact Us')

@section('content')
<section class="dental-assistant-banner inner-banner mini-banner">
    <div class="container">
        <h1 class="">Contact Us</h1>
    </div>
</section>

<section class="contact py-[80px]">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h4 class="text-[40px] italic font-bold ">Contact details</h4>
                <p class="text-lightBlack text-[18px]">Lorem ipsum dolor sit amet, consectetur elit. <br> Ut elit tellus, luctus nec ullamcorper.</p>

                <ul class="company-info space-y-5 mt-16">
                    <li>
                        <div class="flex items-center gap-7">
                            <span class="location-icon text-[28px] size-[64px] rounded-full flex justify-center items-center grey-gredient">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <a href="" class="text-[31px] font-semibold font-kod">5110 Commerce Square Dr. <br> Indianapolis, IN 46237</a>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center gap-7">
                            <span class="mail-icon text-[28px] size-[64px] rounded-full flex justify-center items-center grey-gredient">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <a href="mailto:dentalassistingofindy@gmail.com" class="text-[31px] font-semibold font-kod">dentalassistingofindy@gmail.com</a>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center gap-7">
                            <span class="phone-icon text-[28px] size-[64px] rounded-full flex justify-center items-center grey-gredient">
                                <i class="fa-solid fa-phone-volume"></i>
                            </span>
                            <a href="" class="text-[31px] font-semibold font-kod">317.515.5996</a>
                        </div>
                    </li>
                </ul>

                <ul class="social-icons flex items-center gap-[20px]  mt-10 mb-[20px] lg:mb-0">
                    <li><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="contact-info appointment-form-wrapper xxl:mt-16">
                <form id="appointment-form" class="font-semibold">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <input type="text" id="full-name" placeholder="Your Name" class="">
                        </div>
                        <div class="col-span-2">
                            <input type="text" id="email" placeholder="Email Address" class="">
                        </div>
                        <div class="col-span-2">
                            <input type="tel" id="phone-no" placeholder="Phone No" class="">
                        </div>
                        <div class="relative col-span-2">
                            <select id="services" class="appearance-none w-full px-4 py-2 border border-gray-300 rounded-md">
                                <option value="">Select Services</option>
                                <!-- Add options here if needed -->
                            </select>
                            <div class="select-icon"> <i class="fa-solid fa-chevron-down"></i></div>
                        </div>
                    </div>
                    <a href="" class="btn-primary btn capitalize bg-grey block w-fit mt-10">Requests info</a>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Location -->
<section class="geolocation-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196237.6050786616!2d-86.13275!3d39.77978449999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b50ffa7796a03%3A0xd68e9df640b9ea7c!2sIndianapolis%2C%20IN%2C%20USA!5e0!3m2!1sen!2s!4v1740074621142!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection