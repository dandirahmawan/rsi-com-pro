@extends('layouts.main')

@section('title', 'Portfolio')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-900 bg-cover bg-center lg:py-28 pb-11 pt-20" style="background-image: url('/images/grid-texture.png')">
        <div class="container mx-auto">
            <div class="text-left px-10 lg:px-20 xl:px-0">
                <h1 class="text-white text-3xl md:text-5xl lg:text-5xl font-bold leading-tight">
                    About Us
                </h1>
                <p class="text-sm py-2 text-slate-400 md:text-base lg:text-lg">
                    Driven by Passion | Powered by Innovation, Committed to Your Success.
                </p>
            </div>
        </div>
    </section>

    <!-- Teams Section -->
    <section class="mx-4 lg:mx-6">
        <div class="container mx-auto lg:my-20">
            <div class="my-10">
                <h1 class="text-slate-950 text-3xl md:text-5xl lg:text-5xl font-bold">
                    Our Teams
                </h1>
            </div>
            <div class="grid lg:grid-cols-4 grid-cols-2 gap-6">
                <!-- Team Member 1 -->
                <div>
                    <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    <p class="text-slate-500 text-lg py-4">Ex Multi National Company</p>
                </div>
                <!-- Team Member 2 -->
                <div>
                    <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    <p class="text-slate-500 text-lg py-4">Ex Multi National Company</p>
                </div>
                <!-- Team Member 3 -->
                <div>
                    <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    <p class="text-slate-500 text-lg py-4">Ex Multi National Company</p>
                </div>
                <!-- Team Member 4 -->
                <div>
                    <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    <p class="text-slate-500 text-lg py-4">Ex Multi National Company</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-[#F3F3F3] lg:py-20 py-10">
        <div class="container mx-auto lg:px-6 xl:px-0">
            <div class="text-center">
                <h1 class="text-slate-950 text-3xl md:text-5xl lg:text-5xl font-bold">
                    About
                </h1>
                <div class="py-10 md:my-8 lg:my-8 px-4 lg:px-0 overflow-hidden mx-auto flex items-center justify-center">
                    <div class="w-[1160px] h-[250px] flex items-center justify-center rounded border">
                        <img src="{{ asset('images/Compro Repository.png') }}" alt="About Us Image"
                        class="w-full object-contain">
                    </div>
                </div>
                <p class="text-slate-500 text-xl px-4 lg:px-20">
                    Repository is engaged in services such as website creation <br> app, data, UI, UX, manage service, server or PC procurement, and education.
                </p>
                <p class="text-slate-500 text-xl py-8 px-4 lg:px-20">
                    We are professional consultants who serve in a friendly and high spirit. We are happy to discuss what you need and collaborate to achieve beyond your expectations.
                </p>
                <p class="text-slate-500 text-xl px-4 lg:px-20">
                    We are confident to say that we are the best solution for you.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="lg:my-20 mx-4 py-14">
        <div class="container mx-auto">
            <div class="flex lg:flex-row flex-col items-start justify-between gap-y-4 lg:gap-y-0">
                <!-- Vision Section -->
                <div class="flex-1 lg:h-auto">
                    <h1 class="text-slate-950 text-3xl md:text-4xl lg:text-4xl font-bold pb-4">01 Vision</h1>
                    <p class="text-slate-500 text-xl">
                        To be a leading IT consulting partner that empowers businesses to achieve transformative growth through innovative solutions, while delivering high-quality products that redefine industry standards.
                    </p>
                </div>
                <!-- Divider for Desktop View -->
                <hr class="w-1/6 rotate-90 hidden lg:inline mt-36">
                <!-- Mission Section -->
                <div class="flex-1 lg:h-auto">
                    <h1 class="text-slate-950 text-3xl md:text-4xl lg:text-4xl font-bold pb-4">02 Mission</h1>
                    <p class="text-slate-500 text-xl">
                        We are dedicated to providing exceptional IT consulting services that guide companies in harnessing the power of technology to streamline operations and drive success. Through our innovative IT products and expert consulting, we aim to help organizations thrive in an ever-evolving digital landscape by offering tailored, results-driven solutions and unparalleled customer support.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
