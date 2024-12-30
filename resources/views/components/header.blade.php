<!-- header.blade.php -->
<header class="relative">
    <nav class="sticky-navbar lg:px-14 px-4 py-5 flex justify-between items-center">
        <!-- Logo -->
        <a class="logo" href="{{ route('home') }}">
            <img class="md:scale-110 lg:scale-90 xl:scale-110 scale-90"
                src="{{ asset('images/logo.svg') }}" alt="">
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto xl:space-x-10 lg:space-x-8 text-lg text-white">
            <li><a class="nav-li" href="{{ route('home') }}">Home</a></li>
            <li><a class="nav-li" href="{{ route('home') }}#service-section">Service</a></li>
            <li><a class="nav-li" href="{{ url('/portfolio') }}">Portfolio</a></li>
            <li><a class="nav-li" href="{{ url('/aboutus') }}">About Us</a></li>
        </ul>

        <!-- Contact Button -->
        <a href="https://wa.me/6281299615636" target="_blank" rel="noopener noreferrer"">
        <button class="text-sm md:text-base bg-[#2CB742] text-white font-medium rounded-full py-3 px-10 items-center justify-center gap-x-2 shadow-lg hidden lg:flex">
            <span><img src="{{ asset('images/icon/call.svg') }}" alt="Arrow Icon"/></span>
                Contact
        </button>
        </a>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="lg:hidden">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Mobile Menu Modal -->
        <div id="mobile-menu" class="fixed inset-x-0 top-0 transform -translate-y-full transition-transform duration-300 ease-in-out lg:hidden bg-white shadow-lg">
            <div class="flex justify-between items-center p-8">
                <a href="{{ route('home') }}">
                    <img class="scale-90" src="{{ asset('images/logo.svg') }}" alt="">
                </a>
                <button id="close-menu" class="text-gray-800">
                    <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col space-y-6 p-8">
                <li><a class="text-gray-800 text-lg" href="{{ route('home') }}">Home</a></li>
                <li><a class="text-gray-800 text-lg" href="#service-section">Service</a></li>
                <li><a class="text-gray-800 text-lg" href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li><a class="text-gray-800 text-lg" href="{{ url('/aboutus') }}">About us</a></li>
                <li>
                    <a href="https://wa.me/6281299615636" target="_blank" rel="noopener noreferrer"">
                    <button class="w-full text-sm md:text-base bg-[#2CB742] text-white font-medium rounded-full py-3 px-10 flex items-center justify-center gap-x-2 shadow-lg">
                        <span><img src="{{ asset('images/icon/call.svg') }}" alt="Arrow Icon"/></span>
                            Contact
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
