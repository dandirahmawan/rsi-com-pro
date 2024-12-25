@extends('layouts.main')

@section('title', 'Portfolio')

@section('content')
    <section class="bg-blue-900 bg-cover bg-center  lg:py-28 py-11" style="background-image: url('/images/grid-texture.png">
        <div class="container mx-auto">
            <div class="text-left px-4 lg:px-0">
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
              <div class="flex lg:flex-row flex-col lg:py-12 gap-x-8">
                <div class="w-full">
                  <img src="{{ asset('images/protodumy.png') }}" alt="" srcset="" class="w-full">
                </div>
                <div class="flex flex-col">
                  <p class="text-sm text-slate-500 md:text-base lg:text-lg lg:pt-0 pt-6">2024</p>
                  <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-4xl font-bold py-4">Lorem ipsum dolor sit amet consectetur. Nulla eu ac sed tortor.</h1>
                  <div class="flex gap-x-2">
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Service
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Portfolio
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      About Us
                    </button>
                  </div>
                  <p class="py-4">Lorem ipsum dolor sit amet consectetur. Leo sit facilisis amet adipiscing vivamus sit nunc. Tellus semper habitant luctus hendrerit neque nunc sit tellus. Facilisis a in varius et egestas dolor. Enim elementum magnis lobortis pharetra turpis mauris.</p>
                  <button
                  class="text-sm md:text-base bg-blue-950 rounded-full lg:w-1/4 w-full py-3 flex items-center justify-center gap-x-4 border text-white"
                >
                  <span><img src="{{ asset('images/icon/arroww.svg') }}" alt="Arrow Icon"/></span>
                  See Detail
                </button>
                </div>
              </div>
              <div class="horizontal-line bg-slate-300 lg:my-0 my-6"></div>
              <div class="flex lg:flex-row flex-col lg:py-12 gap-x-8">
                <div class="w-full">
                  <img src="{{ asset('images/protodumy.png') }}" alt="" srcset="" class="w-full">
                </div>
                <div class="flex flex-col">
                  <p class="text-sm text-slate-500 md:text-base lg:text-lg lg:pt-0 pt-6">2024</p>
                  <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-4xl font-bold py-4">Lorem ipsum dolor sit amet consectetur. Nulla eu ac sed tortor.</h1>
                  <div class="flex gap-x-2">
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Service
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Portfolio
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      About Us
                    </button>
                  </div>
                  <p class="py-4">Lorem ipsum dolor sit amet consectetur. Leo sit facilisis amet adipiscing vivamus sit nunc. Tellus semper habitant luctus hendrerit neque nunc sit tellus. Facilisis a in varius et egestas dolor. Enim elementum magnis lobortis pharetra turpis mauris.</p>
                  <button
                  class="text-sm md:text-base bg-blue-950 rounded-full lg:w-1/4 w-full py-3 flex items-center justify-center gap-x-4 border text-white"
                >
                  <span><img src="{{ asset('images/icon/arroww.svg') }}" alt="Arrow Icon"/></span>
                  See Detail
                </button>
                </div>
              </div>
              <div class="flex lg:flex-row flex-col lg:py-12 gap-x-8">
                <div class="w-full">
                  <img src="{{ asset('images/protodumy.png') }}" alt="" srcset="" class="w-full">
                </div>
                <div class="flex flex-col">
                  <p class="text-sm text-slate-500 md:text-base lg:text-lg lg:pt-0 pt-6">2024</p>
                  <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-4xl font-bold py-4">Lorem ipsum dolor sit amet consectetur. Nulla eu ac sed tortor.</h1>
                  <div class="flex gap-x-2">
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Service
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Portfolio
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      About Us
                    </button>
                  </div>
                  <p class="py-4">Lorem ipsum dolor sit amet consectetur. Leo sit facilisis amet adipiscing vivamus sit nunc. Tellus semper habitant luctus hendrerit neque nunc sit tellus. Facilisis a in varius et egestas dolor. Enim elementum magnis lobortis pharetra turpis mauris.</p>
                  <button
                  class="text-sm md:text-base bg-blue-950 rounded-full lg:w-1/4 w-full py-3 flex items-center justify-center gap-x-4 border text-white"
                >
                  <span><img src="{{ asset('images/icon/arroww.svg') }}" alt="Arrow Icon"/></span>
                  See Detail
                </button>
                </div>
              </div>
              <div class="horizontal-line bg-slate-300 lg:my-0 my-6"></div>
              <div class="flex lg:flex-row flex-col lg:py-12 gap-x-8">
                <div class="w-full">
                  <img src="{{ asset('images/protodumy.png') }}" alt="" srcset="" class="w-full">
                </div>
                <div class="flex flex-col">
                  <p class="text-sm text-slate-500 md:text-base lg:text-lg lg:pt-0 pt-6">2024</p>
                  <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-4xl font-bold py-4">Lorem ipsum dolor sit amet consectetur. Nulla eu ac sed tortor.</h1>
                  <div class="flex gap-x-2">
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Service
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      Portfolio
                    </button>
                    <button class="rounded-2xl border py-1 px-5 text-sm lg:text-base">
                      About Us
                    </button>
                  </div>
                  <p class="py-4">Lorem ipsum dolor sit amet consectetur. Leo sit facilisis amet adipiscing vivamus sit nunc. Tellus semper habitant luctus hendrerit neque nunc sit tellus. Facilisis a in varius et egestas dolor. Enim elementum magnis lobortis pharetra turpis mauris.</p>
                  <button
                  class="text-sm md:text-base bg-blue-950 rounded-full lg:w-1/4 w-full py-3 flex items-center justify-center gap-x-4 border text-white"
                >
                  <span><img src="{{ asset('images/icon/arroww.svg') }}" alt="Arrow Icon"/></span>
                  See Detail
                </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
