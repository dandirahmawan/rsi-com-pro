@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-900 bg-cover bg-center h-screen" style="background-image: url('/images/grid-texture.png');">
        <div class="container mx-auto h-full flex flex-col justify-center">
            <!-- Hero Text Section -->
            <div class="text-white text-center flex flex-col items-center justify-center pt-8 lg:pt-32">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Empowering Your <br class="lg:hidden inline"> Business with <br class="hidden lg:inline md:inline">
                    <span class="block sm:inline">
                        Innovative<br class="sm:hidden">
                        <img src="{{ asset('images/hero.svg') }}" alt="Hero Image"
                            class="inline-block w-48 md:w-60 lg:w-auto">
                    </span>
                </h1>
                <p class="text-sm md:text-base lg:text-lg px-4 md:px-10 pt-4">
                    From strategy to execution, we deliver tailored technology services
                    to drive growth and efficiency.
                </p>
            </div>
            <!-- CTA Section -->
            <div class="flex flex-col items-center">
                <button
                    class="text-sm md:text-base bg-white rounded-full my-10 w-11/12 lg:w-1/4 py-3 flex items-center justify-center gap-x-2 shadow-lg">
                    <span><img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" /></span>
                    <a href="https://wa.me/6281299615636" target="_blank" rel="noopener noreferrer">Get a Free
                        Consultation</a>
                </button>
                <span class="absolute right-12 translate-y-24 lg:inline hidden">
                    <img src="{{ asset('images/Comment cursor.svg') }}" alt="">
                </span>
                <p class="text-white text-sm md:text-base lg:text-lg lg:mt-12 lg:pb-12">
                    Trusted IT Solutions for Industry Leaders
                </p>
                <!-- Logo Industry Section -->
                <!-- <div class="overflow-x-auto grayscale">
                        <div class="flex gap-x-4 md:gap-x-8 lg:gap-x-10 items-center justify-start flex-nowrap mt-4">
                            <img src="{{ asset('images/companyhero/samsung-1-logo-svgrepo-com.png') }}" alt="Slack Logo" />
                            <img src="{{ asset('images/companyhero/silver-star-1-logo-svgrepo-com.png') }}" alt="Slack Logo" />
                            <img src="{{ asset('images/companyhero/slack-logo-svgrepo-com.png') }}" alt="Slack Logo" />
                            <img src="{{ asset('images/companyhero/sony-2-logo-svgrepo-com.png') }}" alt="Slack Logo" />
                            <img src="{{ asset('images/companyhero/spacex-logo-svgrepo-com.png') }}" alt="Slack Logo" />
                            <img src="{{ asset('images/companyhero/spotify-1-logo-svgrepo-com.png') }}" alt="Slack Logo" />
                            <img src="{{ asset('images/companyhero/amazon-2-logo-svgrepo-com.png') }}" alt="Slack Logo" />
                            <img src="{{ asset('images/companyhero/new-youtube-logo-logo-svgrepo-com.png') }}"
                                alt="Slack Logo" />
                        </div>
                    </div> -->
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Empowering Section -->
    <section class="lg:my-24">
        <div class="container mx-auto h-full flex flex-col justify-center">
            <div class="text-center flex flex-col items-center justify-center pt-8 lg:pt-16">
                <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-5xl font-bold leading-tight">
                    Empowering Businesses <br class="block lg:hidden">
                    with Global Skills
                </h1>
                <p class="text-sm text-slate-500 md:text-base lg:text-lg px-4 md:px-10 pt-6">
                    We help businesses thrive by connecting them with skilled
                    professionals from around the world. Whether you need expertise,
                    innovation, or a fresh perspective, our global talent pool is ready
                    to deliver solutions tailored to your needs.
                </p>
                <button
                id="accordionToggle"
                class="text-sm md:text-base bg-white rounded-full w-11/12 lg:w-96 my-8 px-12 md:px-16 lg:px-20 py-3 md:py-4 flex items-center justify-center gap-x-2 border">
                <span>
                    <img id="iconArrow" class="transition-transform duration-300" src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" />
                </span>
                <span>Read More</span>
            </button>
            </div>
            <!-- Accordion Content -->
            <div id="accordionContent" class="hidden px-6 py-4 text-left bg-gray-50 border rounded-md">
                <p class="text-lg text-slate-700 leading-relaxed">
                    We specialize in custom software development, helping businesses streamline processes, enhance user
                    experiences, and create cutting-edge digital products. Our team is proficient in the latest
                    technologies, agile methodologies, and industry best practices to ensure we meet your unique business
                    requirements.
                </p>
                <ul class="list-disc list-inside pt-4">
                    <li><strong>Expert Software Development:</strong> Whether you need web applications, mobile solutions,
                        enterprise software, or cloud services, our skilled developers have the expertise to bring your
                        vision to life.</li>
                    <li><strong>Global Talent Pool:</strong> With a worldwide network of developers, engineers, and
                        designers, we offer a diverse range of perspectives and technical capabilities to ensure your
                        project stands out in the global market.</li>
                    <li><strong>Tailored, Scalable Solutions:</strong> From startups to large enterprises, we craft
                        solutions that align with your specific goals, ensuring scalability and long-term success.</li>
                    <li><strong>Agile and Collaborative:</strong> Our agile development approach allows us to work closely
                        with your team, iterating quickly and delivering incremental value throughout the project lifecycle.
                    </li>
                    <li><strong>Cutting-Edge Technologies:</strong> We stay ahead of industry trends, utilizing the latest
                        technologies (including AI, blockchain, IoT, and more) to provide you with innovative and
                        future-proof solutions.</li>
                    <li><strong>Seamless Integration:</strong> Our developers integrate smoothly into your existing teams,
                        ensuring efficient collaboration, high performance, and a seamless development process.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Empowering Section -->

    <!-- Service Section -->
    <section id="service-section" class="bg-[#F3F3F3]">
        <div class="container mx-auto">
            <div class="py-16 mx-4">
                <div class="flex lg:flex-row flex-col items-center justify-between mb-4">
                    <div>
                        <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-5xl font-bold mb-6">
                            Service
                        </h1>
                        <p class="text-sm md:text-base lg:text-lg text-slate-600">
                            Innovative Technology Services Designed to Drive Your Business Forward
                        </p>
                    </div>
                    <a href="Explore all ganti kesini https://drive.google.com/drive/folders/12PO-RgqSeOptcbRxoCPRRXNd1aG2vIzD"
                        target="_blank" rel="noopener noreferrer"
                        class="text-sm md:text-base bg-white rounded-full my-10 w-full lg:w-1/4 px-2 md:px-8 lg:px-12 py-3 md:py-4 flex items-center justify-center gap-x-2 border border-slate-300">
                        <span><img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" /></span>
                        Expolre All
                    </a>
                </div>
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                    @foreach ($services as $service)
                        <div class="rounded-xl border flex justify-center items-center bg-white">
                            <div class="p-5 w-full">
                                <div class="flex flex-row justify-between mb-2">
                                    <h1 class="text-blue-950 text-xl font-bold">{{ $service['title'] }}</h1>
                                    <div class="hidden">
                                        <a href="{{ $service['link'] }}" target="_blank" rel="noopener noreferrer"
                                            class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-full border">
                                            <img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" />
                                        </a>
                                    </div>
                                </div>
                                <p class="text-sm md:text-base lg:text-lg text-slate-600 leading-relaxed mb-4">
                                    {{ $service['description'] }}
                                </p>
                                <div class="rounded-2xl border overflow-hidden">
                                    <img class="object-cover w-full h-[250px]" src="{{ asset($service['image']) }}"
                                        alt="{{ $service['title'] }}" />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!--Portfolio Section -->
    <section class="bg-white">
        <div class="container mx-auto">
            <div class="py-12 px-4">
                <div class="flex lg:flex-row flex-col items-center justify-between">
                    <div>
                        <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-5xl font-bold mb-4">Portfolio</h1>
                        <p>Showcasing Our Success Stories Across Diverse Industries</p>
                    </div>
                    <a href="{{ route('portfolio') }}"
                        class="text-sm md:text-base bg-white rounded-full my-10 w-full lg:w-1/4 px-2 md:px-8 lg:px-12 py-3 md:py-4 flex items-center justify-center gap-x-2 border border-slate-300">
                        <span><img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" /></span>
                        Explore All
                    </a>
                </div>

                <div>
                    @foreach ($portfolios as $portfolio)
                        <div class="flex flex-col lg:flex-row lg:py-12 gap-x-8">
                            <!-- Container Gambar -->
                            <div class="w-full lg:w-5/12 aspect-[16/9] overflow-hidden">
                                <img class="object-fit w-full h-full" src="{{ asset($portfolio['image']) }}"
                                    alt="{{ $portfolio['title'] }}">
                            </div>
                            <!-- Konten Teks -->
                            <div class="flex flex-col lg:w-7/12">
                                {{-- <p class="text-sm text-slate-500 md:text-base lg:text-lg lg:pt-0 pt-6">
                                    {{ $portfolio['year'] }}</p> --}}
                                <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-4xl font-bold py-4">
                                    {{ $portfolio['title'] }}
                                </h1>
                                <div class="flex gap-x-2">
                                    <div class="rounded-2xl border py-1 px-5 text-sm lg:text-base">Technologies</div>
                                    <div class="rounded-2xl border py-1 px-5 text-sm lg:text-base">Development</div>
                                    <div class="rounded-2xl border py-1 px-5 text-sm lg:text-base">Partnership</div>
                                </div>
                                <p class="py-4">
                                    {{ $portfolio['description'] }}
                                </p>
                            </div>
                        </div>
                        <div class="horizontal-line bg-slate-300 lg:my-0 my-6"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection
