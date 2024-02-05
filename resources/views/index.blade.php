@extends('layouts')


@section('content')
    <section style="overflow-x: hidden">
        <div class="bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
            <div class=" xl:px-20 pt-16 xl:grid xl:grid-cols-2 xl:gap-8 xl:items-center pb-8">
                <div data-aos="zoom-out-left" data-aos-delay="700" data-aos-delay="500"
                    class="px-8 xl:pt-12 sm:px-8 xl:px-8 text-center xl:text-left ">
                    <div class="text-4xl md:text-5xl xl:text-8xl font-semibold pt-4 xl:pt-8 text-slate-600 uppercase">
                        <h1 class="">
                            {{ __('profil.layouts.requests.welcome') }}<br>{{ __('home.at') }}<span
                                class="text-orange font-extrabold xl:pt-8 "> VITIB</span>
                        </h1>
                    </div>
                    <p class="text-xl xl:text-2xl md:text-2xl font-medium pt-4 xl:pt-8 text-slate-600">
                        {{ __('home.technological_park_of_ivory_coast') }}
                    </p>
                    <div class="py-8 xl:pt-8 md:pt-8">
                        <a href="{{ route('login') }} ">
                            <button type="button" style="background-color: #F18700"
                                class="px-8 xl:px-16 md:px-12 md:py-2 py-2 xl:py-4 uppercase rounded-none font-bold text-white text-center">
                                {{ __('layouts.footer.join_us') }}
                            </button>
                        </a>
                    </div>
                </div>

                <div data-aos="zoom-out-right" data-aos-delay="700" data-aos-delay="800"
                    class=" bg-no-repeat bg-cover bg-center" style="background-image: url(img/Image9.png);">
                    <div
                        class="videoWrapper flex justify-center items-center rounded-lg border-solid border-4 border-gray-300">
                        <span class="absolute flex h-16 w-16">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="color: white"
                                    class="relative inline-flex rounded-full h-12 w-12 pl-1 bg-amber-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                </svg>
                            </span>
                        </span>
                        <video autoplay loop muted class="custom-video"
                            poster="videos/792bd98f3e617786c850493560e11c45.png">
                            <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>

    <div class="bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mx-auto gap-4 ">
            <!-- Première partie -->
            <div class="flex items-center justify-center p-4">
                <a href="{{ route('avantages.Detail', ['query' => 'home.fiscal_and_regulatory_advantage']) }}"
                    class="flex items-center hover:text-amber-500">
                    <div class="h-16 w-16 mr-4">
                        <img src="{{ asset('img/icon-index/Group 133.png') }}" alt="Logo 1">
                    </div>
                    <span class="text-lg">{!! __('home.fiscal_and_regulatory_advantages') !!}</span>
                </a>
            </div>


            <!-- Deuxième partie -->
            <div class="flex items-center justify-center p-4">
                <a href="{{ route('avantages.Detail', ['query' => __('home.customs_advantages')]) }}"
                    class="flex items-center hover:text-amber-500">
                    <img src="{{ asset('img/icon-index/Group 136.png') }}" alt="Logo 5" class="h-16 w-16 mr-4">
                    <span class="text-lg">{!! __('home.customs_advantages') !!}</span>
                </a>
            </div>

            <!-- Troisième partie -->
            <div class="flex items-center justify-center p-4">
                <a href="{{ route('avantages.Detail', ['query' => __('home.partnerships')]) }}" class="flex items-center hover:text-amber-500">
                    <img src="{{ asset('img/icon-index/Group 138.png') }}" alt="Logo 7" class="h-16 w-16 mr-4">
                    <span class="text-lg">{!! __('home.partneships') !!}</span>
                </a>
            </div>


            <!-- ... (Repeat for other sections) -->
            <div class="flex items-center justify-center p-4">
                <a href="{{ route('avantages.Detail', ['query' => __('home.access_to_a_thriving_market')]) }}"
                    class="flex items-center hover:text-amber-500">
                    <img src="{{ asset('img/icon-index/Group 132.png') }}" alt="Logo 7" class="h-16 w-16 mr-4 ml-2">
                    <span class="text-lg">{!! __('home.access_to_a_thriving_market') !!}</span>
                </a>
            </div>

            <div class="flex items-center justify-center p-4">
                <a href="{{ route('avantages.Detail', ['query' => __('home.skilled_workforce')]) }}"
                    class="flex items-center hover:text-amber-500">
                    <img src="{{ asset('img/icon-index/Group 131.png') }}" alt="Logo 7" class="h-16 w-16 mr-4 ml-6 ">
                    <span class="text-lg ">{!! __('home.skilled_workforce') !!}</span>
                </a>
            </div>

            <div class="flex items-center justify-center p-4">
                <a href="{{ route('avantages.Detail', ['query' => __('home.state_of_the_art_infrastructure')]) }}"
                    class="flex items-center hover:text-amber-500">
                    <img src="{{ asset('img/icon-index/Group 134.png') }}" alt="Logo 7" class="h-16 w-16 mr-4">
                    <span class="text-lg">{!! __('home.state_of_the_art_infrastructure') !!}</span>
                </a>
            </div>

        </div>

        <div class="pl-4 py-20 xl:px-24 xl:pt-24">
            <div class="bg-no-repeat "style="background-image: url(img/background/font_logo.png)">
                <div data-aos="zoom-in-up" data-aos-delay="500" data-aos-delay="500">
                    <div>
                        <h1
                            class=" text-center font-bold text-slate-600 text-3xl md:text-5xl xl:text-5xl sm:p-2 lg:p-6 uppercase">
                            {!! __('home.innovate_in_the_heart_of_africa') !!}
                        </h1>

                        <p class="text-center   xl:text-lg  pt-4 xl:pt-10 ">
                            {{ __('home.welcome_to_vitib') }}
                            <br
                                class="hidden xl:block">{{ __('home.excellence_in_innovation_and_technological_development') }}
                            <br class="hidden xl:block">{{ __('home.located_in_the_heart_of_africa') }}
                            <br class="hidden xl:block">{{ __('home.vitib_is_a_technology_free_zone') }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-col-reverse sm:flex-row py-4 xl:py-0">
                    <div class="sm:w-1/2 text-center sm:text-right sm:pt-4">
                        <a href="/about"
                            class="inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
                            {{ __('home.read_more') }}
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:flex flex-col xl:flex-row py-10 xl:px-24">
            <div class="xl:w-1/2" data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700">
                <div>
                    <img src="img/city.png" class="h-64 xl:h-80 md:h-72 w-full pr-2 xl:pr-4 pl-2" alt="">
                </div>
                <div class="font-bold text-3xl  md:text-5xl xl:text-5xl pl-2 pt-8 md:pt-16 xl:pt-8">
                    <h1>
                        {!! __('home.tech_space_for_you') !!}
                    </h1>
                </div>
                <div class="text-justify text-gray-600 pt-4 pl-2 md:pt-4 md:px-4 xl:pr-4"></div>
                <p>
                    {{ __('home.proud_to_offer_dynamic_ecosystem') }}
                </p>
            </div>
            <div class="xl:w-1/2 py-8 xl:py-0 " data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700">
                <img src="img/tech.png" class="h-64 xl:h-80 md:h-72  md:px-3 w-full" alt="">
                <div class="font-bold text-3xl  md:px-4 md:text-5xl xl:text-5xl md:text-5xl pt-8 md:pt-16 xl:pt-10">
                    <h1>
                        {{ __('home.smart_city') }}
                    </h1>
                </div>
                <div class="text-justify  text-gray-600 py-4  md:pt-4 md:px-4">
                    <p>
                        {{ __('home.zbtic_is_a_territory_with_favorable_tax_policies') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    </section>
@endsection
