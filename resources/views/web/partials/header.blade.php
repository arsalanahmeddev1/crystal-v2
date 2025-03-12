<header class="header absolute top-0 w-full py-[20px]">
    <div class="container mx-auto">
        <div class="flex justify-between flex-wrap sm:flex-nowrap  items-center">
            <div class="logo w-full sm:w-auto flex justify-center mb-[20px] sm:mb-0  ">
                <a href="/"><img src="{{ asset('web/images/logo.png') }}" class="lg:max-w-[100px]  xxl:max-w-[136px]" alt="logo"></a>
            </div>
            <nav class="">
                <ul class="primary-nav  flex xxl:gap-[20px] gap-[23px]">
                    <div class="close-icon menu-toggle">
                        <i class="fa-solid fa-xmark "></i>
                      </div>
                    <li><a href="about">About</a></li>
                    <li><a href="dental-assistant">Dental Assistant</a></li>
                    <li><a href="expanded-function-dental-assistant">EFDA</a></li>
                    <li><a href="coronal-polishing">Coronal Polishing & Fluoride Application</a></li>
                    <li><a href="payment-options">Payment Options</a></li>
                    <li><a href="gallery">Gallery</a></li>
                </ul>
            </nav>
            <div class="flex justify-between items-center gap-[34px]">
                <a href="tel:317.515.5996" class="text-white font-bold italic text-[16px] xxl:text-[18px] 2xl:text-[20px]  ">317.515.5996</a>
                <a href="{{ route('dashboard') }}" class="btn-primary btn">Student Portal</a>
            </div>
            <div class="menu-icon">
                <i class="fa-solid fa-bars menu-toggle"></i>
              </div>
        </div>
    </div>
</header>
