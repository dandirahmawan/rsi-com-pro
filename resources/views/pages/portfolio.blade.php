@extends('layouts.main')

@section('title', 'Portfolio')

@section('content')
    <section class="bg-blue-900 bg-cover bg-center  lg:py-28 pb-11 pt-20" style="background-image: url('/images/grid-texture.png">
        <div class="container mx-auto">
            <div class="text-left px-10 lg:px-20 xl:px-0">
                <h1 class="text-white text-3xl md:text-5xl lg:text-5xl font-bold leading-tight">
                    Portfolio
                </h1>
                <p class="text-sm py-2 text-slate-400 md:text-base lg:text-lg">
                    Showcasing Our Success Stories Across Diverse Industries
                </p>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container mx-auto">
          <div class="py-12 px-4">
            <div>
                @foreach($portfolios as $portfolio)
                <div class="flex flex-col lg:flex-row lg:py-12 gap-x-8">
                    <!-- Container Gambar -->
                    <div class="w-full lg:w-5/12 aspect-[16/9] overflow-hidden">
                        <img class="object-fit w-full h-full" src="{{ asset($portfolio['image']) }}" alt="{{ $portfolio['title'] }}">
                    </div>
                    <!-- Konten Teks -->
                    <div class="flex flex-col lg:w-7/12">
                        <p class="text-sm text-slate-500 md:text-base lg:text-lg lg:pt-0 pt-6">{{ $portfolio['year'] }}</p>
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
@endsection
