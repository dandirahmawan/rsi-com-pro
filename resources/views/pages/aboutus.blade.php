@extends('layouts.main')

@section('title', 'Portfolio')

@section('content')
    <section  class="bg-blue-900 bg-cover bg-center  lg:py-28 py-11" style="background-image: url('/images/grid-texture.png">
        <div class="container mx-auto">
            <div class="text-left px-4 lg:px-0">
                <h1 class="text-white text-3xl md:text-5xl lg:text-5xl font-bold leading-tight">
                    About Us
                </h1>
                <p class="text-sm py-2 text-slate-400 md:text-base lg:text-lg">
                    Driven by Passion, Powered by Innovation, Committed to Your Success.
                </p>
            </div>
        </div>
    </section>
    <section class="mx-4 lg:mx-0">
        <div class="container mx-auto lg:my-20">
            <div class="my-10">
                <h1 class="text-slate-950 text-3xl md:text-5xl lg:text-5xl font-bold">
                    Our Teams
                </h1>
            </div>
            <div class="grid lg:grid-cols-4 grid-cols-2 gap-6">
                <div>
                    <div class="">
                        <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    </div>
                    <h2 class="text-blue-950 text-xl font-semibold pt-4 pb-2" >Calvin Verdonk</h2>
                    <p class="text-slate-500 text-lg pb-2" >Ex Tokopedia</p>
                    <p class="text-slate-600 text-lg font-medium" >President Director</p>
                </div>
                <div>
                    <div class="">
                        <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    </div>
                    <h2 class="text-blue-950 text-xl font-semibold pt-4 pb-2" >Calvin Verdonk</h2>
                    <p class="text-slate-500 text-lg pb-2" >Ex Tokopedia</p>
                    <p class="text-slate-600 text-lg font-medium" >President Director</p>
                </div>
                <div>
                    <div class="">
                        <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    </div>
                    <h2 class="text-blue-950 text-xl font-semibold pt-4 pb-2" >Calvin Verdonk</h2>
                    <p class="text-slate-500 text-lg pb-2" >Ex Tokopedia</p>
                    <p class="text-slate-600 text-lg font-medium" >President Director</p>
                </div>
                <div>
                    <div class="">
                        <img src="{{ asset('images/teams.png') }}" alt="" class="w-full">
                    </div>
                    <h2 class="text-blue-950 text-xl font-semibold pt-4 pb-2" >Calvin Verdonk</h2>
                    <p class="text-slate-500 text-lg pb-2" >Ex Tokopedia</p>
                    <p class="text-slate-600 text-lg font-medium" >President Director</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#F3F3F3] lg:py-20 py-10">
        <div class="container mx-auto">
            <div class="text-center">
                <h1 class="text-slate-950 text-3xl md:text-5xl lg:text-5xl font-bold">
                    About
                </h1>
                <div class="py-10 px-4 lg:px-0">
                    <img src="{{ asset('images/about.png') }}" alt="" class="w-full">
                </div>
                <p class="text-slate-500 text-xl px-4 lg:px-20" >We’re the perfect blend of creative and technical. If you need flawless product execution and jaw-dropping design that entices your audience — then hello, it’s nice to meet you.</p>
                <p class="text-slate-500 text-xl py-8 px-4 lg:px-20" >We’re the perfect blend of creative and technical. If you need flawless product execution and jaw-dropping design that entices your audience — then hello, it’s nice to meet you.</p>
                <p class="text-slate-500 text-xl px-4 lg:px-20" >We’re the perfect blend of creative and technical. If you need flawless product execution and jaw-dropping design that entices your audience — then hello, it’s nice to meet you.</p>
            </div>
        </div>
    </section>
    <section class="mt-24 mb-40 lg: mx-4">
        <div class="container mx-auto">
            <div class="flex lg:flex-row flex-col items-center gap-y-4 lg:gap-y-0">
                <div>
                    <h1 class="text-slate-950 text-3xl md:text-4xl lg:text-4xl font-bold pb-4">01 Vision</h1>
                    <p class="text-slate-500 text-xl">Lorem ipsum dolor sit amet consectetur. Leo sit facilisis amet adipiscing vivamus sit nunc. Tellus semper habitant luctus hendrerit neque nunc sit tellus. Facilisis a in varius et egestas dolor. Enim elementum magnis lobortis pharetra turpis mauris.</p>
                </div>
                <hr class="w-1/3 rotate-90 hidden lg:inline">
                <div>
                    <h1 class="text-slate-950 text-3xl md:text-4xl lg:text-4xl font-bold pb-4">02 Mision</h1>
                    <p class="text-slate-500 text-xl">Lorem ipsum dolor sit amet consectetur. Leo sit facilisis amet adipiscing vivamus sit nunc. Tellus semper habitant luctus hendrerit neque nunc sit tellus. Facilisis a in varius et egestas dolor. Enim elementum magnis lobortis pharetra turpis mauris.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
