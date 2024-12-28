<header>
    <nav class="sticky-navbar md:px-36 px-8 py-5 flex justify-between items-center">
        <!-- Logo -->
        <a class="logo" href="#home">
            <img class="md:scale-110 lg:scale-90 xl:scale-110 scale-90"
                src="{{ asset('images/logo.svg') }}" alt="">
        </a>
        
        <!-- Desktop Menu -->
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto xl:space-x-10 lg:space-x-3 text-lg text-white">
            <li><a class="nav-li" href="#home">Home</a></li>
            <li><a class="nav-li" href="#program">Service</a></li>
            <li><a class="nav-li" href="#fasilitas">Portfolio</a></li>
            <li><a class="nav-li" href="#about">About Us</a></li>
        </ul>

        <!-- Contact Button -->
        <button class="text-sm md:text-base bg-[#2CB742] text-white font-medium rounded-full py-3 px-10 items-center justify-center gap-x-2 shadow-lg hidden lg:inline-block lg:flex">
            <span><img src="{{ asset('images/icon/call.svg') }}" alt="Arrow Icon"/></span>
            Contact
        </button>
    </nav>
</header>

