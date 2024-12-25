@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section class="bg-blue-900 bg-cover bg-center h-screen" style="background-image: url('/images/grid-texture.png');">
        <div class="container mx-auto h-full flex flex-col justify-center">
            <!-- Hero Text Section -->
            <div class="text-white text-center flex flex-col items-center justify-center pt-8 lg:pt-16">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Empowering Your <br class="block lg:hidden" />
                    Business with <br class="hidden lg:inline" />
                    <span class="lg:hidden">Innovative <br />
                        IT Solutions</span>
                    <span class="hidden lg:inline">Innovative IT Solutions</span>
                </h1>
                <p class="text-sm md:text-base lg:text-lg px-4 md:px-10 pt-4">
                    From strategy to execution, we deliver tailored technology services
                    to drive growth and efficiency.
                </p>
            </div>
            <!-- CTA Section -->
            <div class="flex flex-col items-center">
                <button
                    class="text-sm md:text-base bg-white rounded-full my-10 px-12 md:px-16 lg:px-20 py-3 md:py-4 flex items-center justify-center gap-x-2 shadow-lg">
                    <span><img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" /></span>
                    Get a Free Consultation
                </button>
                <p class="text-white text-sm md:text-base">
                    Trusted IT Solutions for Industry Leaders
                </p>
                <!-- Logo Section -->
                <div class="overflow-x-auto">
                    <div class="flex gap-x-4 md:gap-x-8 lg:gap-x-10 items-center justify-start flex-nowrap mt-4">
                        <img src="/assets/slack.png" alt="Slack Logo" />
                        <img src="/assets/sony.png" alt="Sony Logo" />
                        <img src="/assets/spotify.png" alt="Spotify Logo" />
                        <img src="/assets/spacex.png" alt="SpaceX Logo" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:my-24">
        <div class="container mx-auto h-full flex flex-col justify-center">
            <div class="text-center flex flex-col items-center justify-center pt-8 lg:pt-16">
                <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-5xl font-bold leading-tight">
                    Empowering Businesses <br class="block lg:hidden">
                    with Global Skills
                </h1>
                <p class="text-sm text-slate-500 md:text-base lg:text-lg px-4 md:px-10 pt-4">
                    We help businesses thrive by connecting them with skilled
                    professionals from around the world. Whether you need expertise,
                    innovation, or a fresh perspective, our global talent pool is ready
                    to deliver solutions tailored to your needs.
                </p>
                <button
                    class="text-sm md:text-base bg-white rounded-full w-11/12 lg:w-96 my-8 px-12 md:px-16 lg:px-20 py-3 md:py-4 flex items-center justify-center gap-x-2 border">
                    <span><img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" /> </span>
                    Read More
                </button>
            </div>
        </div>
    </section>
    <section class="bg-[#F3F3F3]">
        <div class="container mx-auto">
          <div class="py-16 mx-4">
            <div class="flex lg:flex-row flex-col items-center justify-between">
              <div>
                <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-5xl font-bold mb-4">
                    Service
                </h1>
                <p>Innovative Technology Services Designed to Drive Your Business Forward</p>
              </div>
                <button
                class="text-sm md:text-base bg-white rounded-full my-10 w-full lg:w-1/6 px-2 md:px-8 lg:px-12 py-3 md:py-4 flex items-center justify-center gap-x-2 border border-slate-300"
              >
                <span><img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" /></span>
                Expolre All
              </button>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
              <div class="rounded-xl border flex justify-center items-center bg-white">
                <div class="p-5 w-full">
                  <div class="flex flex-row justify-between mb-2">
                    <h1 class="text-blue-950 text-xl font-bold">UI/UX Design</h1>
                    <div class="hidden lg:inline">
                      <a
                      href="#"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-full border"
                    >
                      <img
                        src="{{ asset('images/icon/arrow.svg') }}"
                        alt="Instagram Icon"
                      />
                    </a>
                    </div>
                  </div>
                  <p class="leading-relaxed mb-4">Creating intuitive and engaging user experiences that delight customers and drive results.</p>
                  <div class="rounded-2xl border">
                    <img src="{{ asset('images/dummy.png') }}" alt="" srcset="" class="w-full">
                  </div>
                </div>
              </div>
              <div class="rounded-xl border flex justify-center items-center bg-white">
                <div class="p-5 w-full">
                  <div class="flex flex-row justify-between mb-2">
                    <h1 class="text-blue-950 text-xl font-bold">UI/UX Design</h1>
                    <div class="hidden lg:inline">
                      <a
                      href="#"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-full border"
                    >
                      <img
                        src="{{ asset('images/icon/arrow.svg') }}"
                        alt="Instagram Icon"
                      />
                    </a>
                    </div>
                  </div>
                  <p class="leading-relaxed mb-4">Creating intuitive and engaging user experiences that delight customers and drive results.</p>
                  <div class="rounded-2xl border">
                    <img src="{{ asset('images/dummy.png') }}" alt="" srcset="" class="w-full">
                  </div>
                </div>
              </div>
              <div class="rounded-xl border flex justify-center items-center bg-white">
                <div class="p-5 w-full">
                  <div class="flex flex-row justify-between mb-2">
                    <h1 class="text-blue-950 text-xl font-bold">UI/UX Design</h1>
                    <div class="hidden lg:inline">
                      <a
                      href="#"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-full border"
                    >
                      <img
                        src="{{ asset('images/icon/arrow.svg') }}"
                        alt="Instagram Icon"
                      />
                    </a>
                    </div>
                  </div>
                  <p class="leading-relaxed mb-4">Creating intuitive and engaging user experiences that delight customers and drive results.</p>
                  <div class="rounded-2xl border">
                    <img src="{{ asset('images/dummy.png') }}" alt="" srcset="" class="w-full">
                  </div>
                </div>
              </div>
              <div class="rounded-xl border flex justify-center items-center bg-white">
                <div class="p-5 w-full">
                  <div class="flex flex-row justify-between mb-2">
                    <h1 class="text-blue-950 text-xl font-bold">UI/UX Design</h1>
                    <div class="hidden lg:inline">
                      <a
                      href="#"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="group/link relative inline-flex h-[34px] w-[34px] items-center justify-center rounded-full border"
                    >
                      <img
                        src="{{ asset('images/icon/arrow.svg') }}"
                        alt="Instagram Icon"
                      />
                    </a>
                    </div>
                  </div>
                  <p class="leading-relaxed mb-4">Creating intuitive and engaging user experiences that delight customers and drive results.</p>
                  <div class="rounded-2xl border">
                    <img src="{{ asset('images/dummy.png') }}" alt="" srcset="" class="w-full">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-white">
        <div class="container mx-auto">
          <div class="py-12 px-4">
            <div class="flex lg:flex-row flex-col items-center justify-between">
              <div>
                <h1 class="text-blue-950 text-3xl md:text-5xl lg:text-5xl font-bold mb-4">Portfolio</h1>
                <p>Showcasing Our Success Stories Across Diverse Industries</p>
              </div>
                <button
                class="text-sm md:text-base bg-white rounded-full my-10 w-full lg:w-1/6 px-2 md:px-8 lg:px-12 py-3 md:py-4 flex items-center justify-center gap-x-2 border border-slate-300"
              >
                <span><img src="{{ asset('images/icon/arrow.svg') }}" alt="Arrow Icon" /></span>
                Expolre All
              </button>
            </div>
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
            </div>
          </div>
        </div>
      </section>
@endsection
