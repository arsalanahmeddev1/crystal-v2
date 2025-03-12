@include('web.partials.cta')
<footer class="footer pt-[80px] pb-[40px] bg-[#EDEDED]">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5">
            <div class="lg:col-span-2">
                <img src="{{ asset('web/images/logo-black.png') }}" class="mb-[30px]" alt="">
                <p class="mb-[40px] max-w-[300px] text-start">
                    Lorem ipsum dolor sit amet, consec
                    tetur adipiscing elit.
                </p>
                <ul class="social-icons flex items-center gap-[20px] mb-[20px] lg:mb-0">
                    <li><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div>
                <ul class="footer-nav">
                    <h4 class="text-[22px] font-medium mb-[25px]">Resources</h4>
                    <li><a href="javascript:;">Documentation</a></li>
                    <li><a href="javascript:;">Privacy Policy</a></li>
                    <li><a href="javascript:;">Press Files</a></li>
                    <li><a href="javascript:;">FAQs</a></li>
                    <li><a href="./contact">Contact</a></li>
                </ul>
            </div>
            <div>
                <ul class="footer-nav">
                    <h4 class="text-[22px] font-medium mb-[25px]">Explore</h4>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="./class-schedule">Class Schedule</a></li>
                    <li><a href="./gallery">Gallery</a></li>
                    <li><a href="javascript:;">Testimonials</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[22px] font-medium mb-[25px]">Explore</h4>
                <p class="mb-[40px] max-w-[300px] text-start">
                  Lorem ipsum dolor sit amet, consec
                  tetur adipiscing elit.
              </p>
                <h4 class="text-[22px] font-medium mb-[25px]">Contact</h4>
                <a href="tel:317.515.5996" class="font-inter mb-[20px] block">317.515.5996</a>
                <a href="mailto:dentalassistingofindy@gmail.com" class="font-inter">dentalassistingofindy@gmail.com</a>
            </div>
        </div>
        <div class="border-b border-grey mt-[70px] mb-[40px]"></div>
        <div class="flex items-center justify-between">
          <div>
            <span class="font-inter">Copyright © 2025 | all rights reserved.</span>
          </div>
          <div class="flex gap-[30px] items-center">
            <a href="javascript:;" class="font-inter text-[14px]">Privacy Policy</a>
            <a href="javascript:;" class="font-inter text-[14px]">Terms & Services</a>
          </div>

        </div>

    </div>
</footer>
