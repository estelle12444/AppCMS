@extends('layouts')


@section('content')
<section class="overflow-x-hidden" >
    <div class="bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
        <div class=" xl:px-20 pt-28 lg:pt-16 md:pt-20 xl:grid xl:grid-cols-2 xl:gap-8 xl:items-center pb-8">
            <div  data-aos="zoom-out-left" data-aos-delay="500" class="px-8 xl:pt-12 sm:px-8 xl:px-8 text-center xl:text-left ">
                <div class="text-6xl md:text-6xl xl:text-8xl font-semibold pt-4 xl:pt-8 text-slate-600 uppercase">
                    <!-- Modal -->
                    <h1 {{App\Helper::test('home.carousel.left.at') }} class="partie relative " >
                       {{-- <span {{App\Helper::test('home.carousel.left.welcome') }} class="partie relative " >{!! __('home.carousel.left.welcome') !!} </span> <br>
                       <span {{App\Helper::test('home.carousel.left.at') }} class="partie relative">{!!  __('home.carousel.left.at') !!}</span>
                       <span class="text-orange font-extrabold xl:pt-8 ">
                         VITIB
                        </span> --}}
                        {!!  __('home.carousel.left.at') !!}
                    </h1>
                </div>
                <p  {{App\Helper::test('home.carousel.left.technological') }} class=" partie relative text-xl xl:text-2xl md:text-2xl font-medium pt-4 xl:pt-8 text-slate-600">
                    {!! __('home.carousel.left.technological') !!}
                </p>
                <div class="py-8 xl:pt-8 md:pt-8">
                    <a href="{{ route('login') }} ">
                        <button type="button" style="background-color: #F18700"
                           class=" px-8 py-4 xl:px-16 md:px-12 md:py-2  xl:py-4 uppercase rounded-none font-bold text-white text-center">
                           <span class="partie relative" {{App\Helper::test('layouts.footer.join_us') }} > {!! __('layouts.footer.join_us') !!}</span>
                        </button>
                    </a>
                </div>
            </div>

            <div data-aos="zoom-out-right" data-aos-delay="700"
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
<div class=" bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mx-auto gap-4 ">
        @foreach ($avantages as $avantage)
            <div class="flex items-center justify-center p-4">
                <a href="{{ route('avantages.Detail', ['query' => $avantage['routeName']]) }}"
                    class="flex items-center hover:text-amber-500">
                    <div class="h-16 w-16 mr-4">
                        <img src="{{ asset($avantage['imgPath']) }}" alt="{{ $avantage['altText'] }}">
                    </div>
                    <span class="partie relative"  data-id="{{ $avantage['id'] }}" {{App\Helper::test($avantage['translationKey']) }} >{!! __($avantage['translationKey']) !!}</span>
                </a>
            </div>
        @endforeach

    </div>

    <div class="pl-4 py-20 xl:px-24 xl:pt-24">
        <div class="bg-no-repeat "style="background-image: url(img/background/font_logo.png)">
            <div data-aos="zoom-in-down"  data-aos-delay="500">
                <div>
                    <h1 {{App\Helper::test('home.presentation.title') }}
                        class=" partie relative text-center font-bold text-slate-600 text-3xl md:text-5xl xl:text-5xl sm:p-2 lg:p-6 uppercase">
                        {!! __('home.presentation.title') !!}
                    </h1>

                    <p class="text-center   xl:text-lg  pt-4 xl:pt-10 partie relative "{{App\Helper::test('home.presentation.subtitle') }}>
                       {{-- <span class=" partie relative " {{App\Helper::test('home.presentation.subtitle') }} > </span>
                        <br class="hidden xl:block  ">
                        <span  {{App\Helper::test('home.presentation.content1') }}  class=" partie relative ">
                            {!! __('home.presentation.content1') !!}
                        </span>
                        <br class="hidden xl:block">
                        <span {{App\Helper::test('home.presentation.content2') }}  class=" partie relative ">{!! __('home.presentation.content2') !!}</span>
                        <br class="hidden xl:block">
                        <span {{App\Helper::test('home.presentation.content3') }}  class=" partie relative ">{!! __('home.presentation.content3') !!}</span> --}}
                        {!! __('home.presentation.subtitle') !!}
                    </p>
                </div>
            </div>
            <div class="flex flex-col-reverse sm:flex-row py-4 xl:py-0">
                <div class="sm:w-1/2 text-center sm:text-right sm:pt-4">
                    <a href="/about" {{App\Helper::test('home.button.read_more') }}
                        class=" partie relative inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
                        {!! __('home.button.read_more') !!}
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                <h1 {{App\Helper::test('home.presentation2.tech_space_for_you') }}  class=" partie relative ">
                    {!! __('home.presentation2.tech_space_for_you') !!}
                </h1>
            </div>
            <div class="text-justify text-gray-600 pt-4 pl-2 md:pt-4 md:px-4 xl:pr-4">
                <p  {{App\Helper::test('home.presentation2.proud_to_offer_dynamic_ecosystem') }}  class=" partie relative ">
                    {!! __('home.presentation2.proud_to_offer_dynamic_ecosystem') !!}
                </p>
            </div>
        </div>
        <div class="xl:w-1/2 py-8 xl:py-0 " data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700">
            <img src="img/tech.png" class="h-64 xl:h-80 md:h-72  md:px-3 w-full" alt="">
            <div class="font-bold text-3xl  md:px-4 md:text-5xl xl:text-5xl md:text-5xl pt-8 md:pt-16 xl:pt-10">
                <h1  {{App\Helper::test('home.presentation2.smart_city') }}  class=" partie relative ">
                    {!!__('home.presentation2.smart_city') !!}
                </h1>
            </div>
            <div class="text-justify  text-gray-600 py-4  md:pt-4 md:px-4">
                <p  {{App\Helper::test('home.presentation2.zbtic_is_a_territory_with_favorable_tax_policies') }} class=" partie relative ">
                    {!! __('home.presentation2.zbtic_is_a_territory_with_favorable_tax_policies') !!}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

