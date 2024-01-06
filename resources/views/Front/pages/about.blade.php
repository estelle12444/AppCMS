@extends('layouts')

@section('content')
    <style>
        #carte-map {
            height: 300px
        }
    </style>
    <section class="bg-center bg-no-repeat bg-slate-400 bg-blend-multiply" style="background-image: url(img/immobilier1.png)">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-16 md:pt-20  lg:py-0 mb-2" >
            <div data-aos="zoom-in" data-aos-duration="500"data-aos-delay="700"
            class=" text-4xl font-semibold text-white md:pt-8 pt-4 lg:pb-8 lg:pt-24 xl:text-5xl lg:text-6xl ">
                {{-- <p>Ensemble, Bâtissons
                    <span class="text-orange ">la Ville Intelligente</span>
                     N°
                     <span class="text-orange xl:text-5xl font-bold">1</span>
                     en Afrique
                </p> --}}
                {!! __('about.vision')!!}
            </div>
        </div>
    </section>

    <section class="" style="min-height: 1480px;">
        <div class="xl:px-32 xl:px-12 xl:px-4 relative bg-repeat-x" style="background-image: url(img/Image8.png);">
            <div class="xl:flex flex-row  ">
                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"class=" md:px-8 w-full xl:w-1/2  ">
                    <img src="img/icon-index/dg.png" width="" alt="">
                </div>
                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                    class=" md:px-8 xl:w-1/2  mx-4 xl:mr-24">
                    <div  class="font-bold xl:text-5xl py-8 text-4xl md:text-5xl ">
                        {!! __('about.director_general_message_title') !!}
                    </div>
                    <div class="text-justify text-gray-600 xl:text-lg tracking-tight ">
                        {!! __('about.director_general_message') !!}
                    </div>
                    <div class="py-8" style="float:right ">
                        <div class="font-bold">
                            {!! __('about.director_general_name') !!}
                        </div>

                        {!! __('about.director_general') !!}
                    </div>
                </div>

                <div class="xl:flex flex-row white xl:absolute  xl:mt-6 left-0 py-6 xl:top-[90%] mt-24 xl:mt-0"
                    style="background-image: url(img/blue.png);">
                    <div class="xl:w-1/2 xl:pl-32 px-4 xl:pr-8 pt-10">
                        <div class="font-bold text-4xl  pb-4 bg-[url('/public/img/icon-index/MOTIF.png')]  bg-8  bg-no-repeat bg-left ">
                            {!! __('about.mission.title') !!}
                        </div>
                        <div class="text-justify pt-8 pb-8">
                            {!! __('about.mission.describe') !!}
                        </div>
                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"class=" text-justify tracking-tight ">
                            {!! __('about.mission.content') !!}
                        </div>
                    </div>

                    <div class=" xl:w-1/2 xl:pt-32 xl:pl-8 xl:pr-32 px-4 ">
                        <div class="font-bold text-4xl pb-4 bg-[url('/public/img/icon-index/MOTIF.png')]  bg-8  bg-no-repeat bg-left ">
                            {!! __('about.value.title') !!}
                        </div>
                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="text-justify tracking-tight">
                            {!! __('about.value.content') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="xl:py-8 md:py-6 py-2 lg:mt-4 "></div>
@endsection
