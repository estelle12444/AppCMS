@extends('layouts')


@section('content')
<section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png)">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-20 md:pt-20  lg:py-0">
        <div data-aos="zoom-in" data-aos-duration="500"data-aos-delay="700" {{App\Helper::test('installer.carousel.title') }} class=" partie relative text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:pt-20 pt-10 lg:pb-20 lg:pt-32 xl:text-5xl lg:text-6xl ">
                {!!__('installer.carousel.title')!!}
        </div>
    </div>
</section>
<div class="bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90%">
    <div class=" md:px-20 pt-12 px-4 xl:px-32 pb-20 xl:grid xl:grid-cols-3 grid-cols-1 gap-3 ">
        <div class="">
            <img data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="600" src="img/page_4/Image5.png"alt="">
        </div>
        <div class="xl:col-span-2 xl:px-8 md:px-0">
            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="400"  {{App\Helper::test('installer.section.eligibility.prerequisites.title') }} class=" partie relative xl:text-3xl text-4xl font-bold text-left py-8 md:py-6 xl:py-0 lg:pr-16 text-gray-600">
                {!!__('installer.section.eligibility.prerequisites.title')!!}
            </div>
            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500" {{App\Helper::test('installer.section.eligibility.prerequisites.subtitle') }} class=" partie relative pt-4 text-justify xl:text-lg">
                {!!__('installer.section.eligibility.prerequisites.subtitle')!!}
            </div>
            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="400" class="flex items-center pl-4 xl:pl-10 pt-4 rounded-lg" role="alert">
                <div class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <div class=" partie relative ml-2 xl:ml-4 xl:text-lg font-normal" {{App\Helper::test('installer.section.eligibility.prerequisites.biotechnology') }}>
                    {!!__('installer.section.eligibility.prerequisites.biotechnology')!!}
                </div>
            </div>
            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500"
                class="flex items-center pl-4 xl:pl-10 pt-4 rounded-lg" role="alert">
                <div class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <div class=" partie relative ml-2 xl:ml-4 xl:text-lg font-normal" {{App\Helper::test('installer.section.eligibility.prerequisites.information') }}>
                    {!!__('installer.section.eligibility.prerequisites.information')!!}
                </div>
            </div>
            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="600"
                class="flex items-center pl-4 xl:pl-10 pt-4 rounded-lg" role="alert">
                <div class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <div class=" partie relative ml-2 xl:ml-4 xl:text-lg font-normal" {{App\Helper::test('installer.section.eligibility.prerequisites.banks') }}>
                    {!!__('installer.section.eligibility.prerequisites.banks')!!}
                </div>
            </div>

            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500" {{App\Helper::test('installer.section.eligibility.prerequisites.vitib') }} class=" partie relative pt-4 text-justify xl:text-lg">
                {!!__('installer.section.eligibility.prerequisites.vitib')!!}
            </div>
        </div>
    </div>
    <div class="flex flex-col text-center xl:py-20 md:py-16 py-4">
        <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500" {{App\Helper::test('installer.section.approval_procedure') }} class=" partie relative text-2xl lg:text-4xl md:text-4xl font-bold uppercase">
            {!!__('installer.section.approval_procedure')!!}
        </div>
        <div class="xl:py-8 py-4 xl:pt-20 xl:px-24 px-6 md:px-6 ">
            <img data-aos="zoom-out-right" data-aos-duration="500" data-aos-delay="600"
                src="{{asset('img/icon-installer/Parcours.png')}}" alt="">
        </div>
    </div>

    <div class="p-4 bg-white shadow-md">
        <div class=" md:px-20 px-4 sm:px-8 lg:pt-8 xl:px-16 lg:px-32 pb-8 sm:pb-16 xl:pb-16 lg:pb-24">
            <div  {{App\Helper::test('installer.section.eligibility.activities.title') }} data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500" class=" partie relative text-2xl xl:text-4xl md:text-4xl font-bold text-center md:text-justify lg:text-justify">
               {!!__('installer.section.eligibility.activities.title')!!}
            </div>
            <div class="lg:pt-10"></div>
            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="700" class="grid grid-cols-1 md:grid-cols-1 gap-3">
                <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-between">
                    <!-- Icône à gauche -->
                    <div class="flex items-center">
                        <div
                            class="inline-flex items-center flex-shrink-0 w-6 h-6 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                            <img src="{{asset('img/icon-installer/Group.png')}}" alt="">
                        </div>
                        <!-- Texte ou d'autres éléments à côté de l'icône -->
                        <div {{App\Helper::test('installer.section.eligibility.activities.industrial') }} class=" partie relative ml-2 lg:ml-8 text-sm lg:text-xl font-normal">
                            {!!__('installer.section.eligibility.activities.industrial')!!}
                        </div>
                    </div>
                    <!-- Icône d'accordéon à droite -->
                    <button class="focus:outline-none" id="etape1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                </div>
                <div id="info1" class="hidden mt-4">
                    <div class=" md:px-20 px-4 sm:px-8 xl:px-16 lg:px-32 pb-8 sm:pb-16 xl:pb-24 lg:pb-32">
                        <div {{App\Helper::test('installer.section.eligibility.industrial.activities_title') }} data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="600" class=" partie relativetext-2xl xl:text-4xl md:text-4xl font-bold text-center md:text-justify lg:text-justify">
                            {!!__('installer.section.eligibility.industrial.activities_title')!!}
                        </div>
                        <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="700"
                            class="grid grid-cols-1 md:grid-cols-2 gap-3 md:py-4 xl:py-0">
                            <div class="flex items-center pt-4 lg:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-6 lg:w-8 h-6 lg:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.activities_computer') }} class=" partie relative ml-2 lg:ml-8 text-sm lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.activities_computer')!!}
                                </div>
                            </div>

                            <div class="flex items-center pt-4 lg:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-6 lg:w-8 h-6 lg:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div  {{App\Helper::test('installer.section.eligibility.industrial.telecom') }} class=" partie relative ml-2 lg:ml-4 text-sm lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.telecom')!!}
                                </div>
                            </div>

                            <div class="flex items-center pt-4 lg:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-6 lg:w-8 h-6 lg:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.biotechnology') }}  class=" partie relative ml-2 lg:ml-4 text-sm lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.biotechnology')!!}
                                </div>
                            </div>
                            <div class="flex items-center pt-4 lg:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-6 lg:w-8 h-6 lg:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.audiovisual') }} class=" partie relative ml-2 lg:ml-4 text-sm lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.audiovisual')!!}
                                </div>
                            </div>

                            <div class="flex items-center pt-4 lg:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-6 lg:w-8 h-6 lg:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.audiovisual') }} class=" partie relative ml-2 lg:ml-4 text-sm lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.audiovisual')!!}
                                </div>
                            </div>

                            <div class="flex items-center pt-4 lg:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-6 lg:w-8 h-6 lg:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.software') }} class=" partie relative ml-2 lg:ml-4 text-sm lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.software')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="inline-flex items-center flex-shrink-0 w-6 h-6 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                            <img src="{{asset('img/icon-installer/Vector-1.png')}}" alt="">
                        </div>
                        <div {{App\Helper::test('installer.section.eligibility.activities.research_development') }} class=" partie relative ml-2 lg:ml-8 text-lg lg:text-xl font-normal">
                            {!!__('installer.section.eligibility.activities.research_development')!!}
                        </div>
                    </div>
                    <!-- Icône d'accordéon à droite -->
                    <button class="focus:outline-none" id="etape2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                </div>
                <div id="info2" class="hidden mt-4">
                    <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500" {{App\Helper::test('installer.section.eligibility.activities.research_development_title') }} class=" partie relative text-2xl xl:text-4xl md:text-4xl font-bold text-center md:text-justify lg:text-justify ">
                        {!!__('installer.section.eligibility.activities.research_development_title')!!}
                        <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500"
                            class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 lg:grid-cols-3 gap-4">
                            <div class="flex items-center pt-4 sm:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.activities_computer') }} class=" partie relative ml-4 text-sm sm:text-md lg:text-lg  font-normal">
                                    {!!__('installer.section.eligibility.industrial.activities_computer')!!}
                                </div>
                            </div>
                            <div class="flex items-center pt-4 sm:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.telecom') }} class=" partie relative ml-4 text-sm sm:text-md  lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.telecom')!!}
                                </div>
                            </div>
                            <div class="flex items-center pt-4 sm:pt-8 rounded-lg" role="alert">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.biotechnology.products') }} class=" partie relative ml-4 text-sm sm:text-md  lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.biotechnology.products')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-between">
                        <!-- Icône à gauche -->
                    <div class="flex items-center">
                        <div class="inline-flex items-center flex-shrink-0 w-6 h-6 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                            <img src="{{asset('img/icon-installer/Vector.png')}}" alt="">
                        </div>
                            <!-- Texte ou d'autres éléments à côté de l'icône -->
                        <div {{App\Helper::test('installer.section.eligibility.activities.capacity_building') }} class=" partie relative ml-2 lg:ml-8 text-sm lg:text-xl font-normal">
                            {!!__('installer.section.eligibility.activities.capacity_building')!!}
                        </div>
                    </div>
                        <!-- Icône d'accordéon à droite -->
                    <button class="focus:outline-none" id="etape3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-500">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <div id="info3" class="hidden mt-4">
                    <div class="px-4 md:px-20 py-4 lg:px-20 ">
                            <div {{App\Helper::test('installer.section.capacity_building') }} data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="700"
                            class=" partie relative text-2xl xl:text-4xl md:text-4xl font-bold text-center md:text-justify lg:text-justify ">
                                {!!__('installer.section.capacity_building')!!}
                            </div>
                            <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="700" class="grid grid-cols-1 gap-3 xl:grid-cols-3 md:grid-cols-2">
                                <div class="flex items-center py-4 lg:py-8 rounded-lg" role="alert">
                                    <div class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <div {{App\Helper::test('installer.section.eligibility.industrial.activities_computer') }} class=" partie relative ml-4 sm:text-md lg:text-lg font-normal">
                                        {!!__('installer.section.eligibility.industrial.activities_computer')!!}
                                    </div>
                                </div>

                                <div class="flex items-center py-4 lg:py-8 rounded-lg" role="alert">
                                    <div
                                        class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <div {{App\Helper::test('installer.section.eligibility.industrial.telecom') }} class=" partie relative ml-4 sm:text-md lg:text-lg font-normal">
                                        {!!__('installer.section.eligibility.industrial.telecom')!!}
                                    </div>
                                </div>

                                <div class="flex items-center py-4 lg:py-8 rounded-lg" role="alert">
                                    <div
                                        class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <div {{App\Helper::test('installer.section.eligibility.industrial.biotechnology.productse') }} class=" partie relative ml-4 sm:text-md lg:text-lg font-normal">
                                        {!!__('installer.section.eligibility.industrial.biotechnology.products')!!}
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-between">
                        <!-- Icône à gauche -->
                        <div class="flex items-center">
                            <div class="inline-flex items-center flex-shrink-0 w-6 h-6 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                <img src="{{asset('img/icon-installer/Group 267.png')}}" alt="">
                            </div>

                            <!-- Texte ou d'autres éléments à côté de l'icône -->
                            <div {{App\Helper::test('installer.section.eligibility.activities.services') }} class=" partie relative ml-2 lg:ml-8 text-sm lg:text-xl font-normal">
                                {!!__('installer.section.eligibility.activities.services')!!}
                            </div>
                        </div>
                        <!-- Icône d'accordéon à droite -->
                        <button class="focus:outline-none" id="etape4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="info4" class="hidden mt-4">
                        <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="500" class="md:px-20 px-4 sm:px-8 xl:px-16 lg:px-32 pb-8 sm:pb-8 xl:pb-8 lg:pb-8">
                            <div  {{App\Helper::test('installer.section.value_added.title') }}class="text-2xl xl:text-4xl md:text-4xl font-bold text-center md:text-justify lg:text-justify ">
                                {!!__('installer.section.value_added.title')!!}
                            </div>
                            <div {{App\Helper::test('installer.section.value_added.content') }} data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="600"
                                class=" partie relative pt-6 pb-8 text-center sm:text-justify text-md lg:text-lg">
                                {!!__('installer.section.value_added.content')!!}
                            </div>
                        </div>
                        <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="700"
                            class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 lg:grid-cols-4 gap-6">
                            <div class="flex items-center ">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.activities_computer') }} class=" partie relative ml-4 sm:text-md lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.activities_computer')!!}
                                </div>
                            </div>
                            <div class="flex items-center ">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div  {{App\Helper::test('installer.section.eligibility.industrial.telecom') }} class=" partie relative ml-4 sm:text-md lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.telecom')!!}
                                </div>
                            </div>
                            <div class="flex items-center ">
                                <div
                                    class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <div {{App\Helper::test('installer.section.eligibility.industrial.biotechnology.products') }} class=" partie relative ml-4 sm:text-md lg:text-lg font-normal">
                                    {!!__('installer.section.eligibility.industrial.biotechnology.products')!!}
                                </div>
                            </div>
                        </div>
                     </div>

                    <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-between">
                        <!-- Icône à gauche -->
                        <div class="flex items-center">
                            <div class="inline-flex items-center flex-shrink-0 w-6 h-6 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                <img src="{{asset('img/icon-installer/Group-1.png')}}" alt="">
                            </div>
                            <!-- Texte ou d'autres éléments à côté de l'icône -->
                            <div {{App\Helper::test('installer.section.eligibility.activities.accompanying') }} class=" partie relative ml-2 lg:ml-8 text-sm lg:text-xl font-normal">
                                {!!__('installer.section.eligibility.activities.accompanying')!!}
                            </div>
                        </div>
                        <!-- Icône d'accordéon à droite -->
                        <button class="focus:outline-none" id="etape5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="info5" class="hidden mt-4">
                        <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="md:px-20 px-4 xl:px-32 py-8">
                            <div class="text-2xl xl:text-4xl md:text-4xl font-bold text-center md:text-justify lg:text-justify">
                                <span class=" partie relative">   {!!__('installer.section.activities_accompanying.title')!!} </span>
                            </div>
                            <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600"
                                class="pt-4 xl:pt-10 text-center md:text-left xl:text-justify text-base xl:text-xl lg:text-lg">
                                <span class=" partie relative">   {!!__('installer.section.activities_accompanying.content')!!} </span>
                        </div>
                            <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700"
                                class="grid grid-cols-1 xl:grid-cols-2 md:grid-cols-2 gap-4">

                                <div class="flex items-center pt-6 xl:pt-8 rounded-lg xl:text-xl" role="alert">
                                    <div
                                        class="inline-flex items-center flex-shrink-0 w-6 h-6 xl:w-8 xl:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <span class=" partie relative">  {!!__('installer.section.eligibility.industrial.activities_computer')!!} </span>
                                </div>

                                <div class="flex items-center pt-6 xl:pt-8 rounded-lg xl:text-xl" role="alert">
                                    <div
                                        class="inline-flex items-center flex-shrink-0 w-6 h-6 xl:w-8 xl:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <span  {{App\Helper::test('installer.section.eligibility.industrial.telecom') }}class=" partie relative">   {!!__('installer.section.eligibility.industrial.telecom')!!}</span>
                                </div>

                                <div class="flex items-center pt-6 xl:pt-8 rounded-lg" role="alert">
                                    <div
                                        class="inline-flex items-center flex-shrink-0 w-6 h-6 xl:w-8 xl:h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                     <span {{App\Helper::test('installer.section.eligibility.industrial.biotechnology.products') }} class=" partie relative"> {!!__('installer.section.eligibility.industrial.biotechnology.products')!!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>
</div>

<div class="xl:px-20 md:px-0 px-6  bg-no-repeat  bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90%">
    <div class="xl:flex flex-col bg-repeat-x" style="background-image: url('img/Image6.png')">
        <div class="  xl:py-8 md:py-8">
            <div {{App\Helper::test('installer.join_us.title') }} class=" partie relative text-2xl xl:text-4xl md:text-4xl pb-4 xl:pb-8 text-center font-bold text-slate-600 space"
                data-aos="zoom-in-up" data-aos-delay="700" data-aos-delay="500">
                {!!__('installer.join_us.title')!!}
            </div>
            <div class="xl:flex flex-row py-4 xl:py-8" data-aos="zoom-in-up" data-aos-delay="700"
            data-aos-delay="700">
            <div class="xl:w-1/3 xl:mt-6  ">
            <img class="h-auto max-w-full rounded-lg md:pl-8 " src="img/Image7.png" alt="">
            </div>
            <div class="xl:w-1/3  xl:pl-4 mt-2 xl:mt-4">
            <div {{App\Helper::test('installer.join_us.subtitle') }} class=" partie relative font-bold xl:text-lg md:text-3xl">
            {!!__('installer.join_us.subtitle')!!}
            </div>
            <div {{App\Helper::test('installer.join_us.content') }} class=" partie relative text-justify xl:text-xl md:pt-10 xl:pt-2">
            {!!__('installer.join_us.content')!!}
            </div>

            <div {{App\Helper::test('installer.join_us.vision') }} class=" partie relative text-justify xl:text-xl">
            {!!__('installer.join_us.vision')!!}
            </div>
            </div>
            <div class="xl:w-1/3 xl:pl-4 xl:mt-2 xl:mt-0 ">
            <div class=" xl:border-dashed xl:border-l-2 border-gray-700">
            <div class="flex flex-row ml-4 pb-4 py-6">
            <div class="xl:w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            </div>
            <div class="xl:w-3/5">
                <a href="/download-pdf" class="underline hover:underline">
                    <div {{App\Helper::test('installer.join_us.form_vitib') }} class=" partie relative xl:text-lg">
                    {!!__('installer.join_us.form_vitib')!!}
                    </div>
                </a>
            </div>
            <div class="xl:w-1/5">
            <a href="/download-pdf" class="underline hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
            </a>
            </div>

            <div></div>
            </div>
            <div class="flex flex-row ml-4 pb-4">
            <div class="xl:w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            </div>
            <div class="xl:w-3/5">
            <a href="/opportunity-pdf" class="underline hover:underline">
            <div  {{App\Helper::test('installer.join_us.opportunity_list') }} class=" partie relative xl:text-lg">
            {!!__('installer.join_us.opportunity_list')!!}
            </div>
            </a>
            </div>
            <div class="xl:w-1/5">
            <a href="/opportunity-pdf" class="underline hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
            </a>
            </div>

            <div></div>
            </div>
            <div class="flex flex-row ml-4 pb-4">
            <div class="w-1/5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            </div>
            <div class="w-3/5">
            <a href="/telecharger-pdf" class="underline hover:underline">
            <div  {{App\Helper::test('installer.join_us.form_pepinier') }} class=" partie relative xl:text-lg">
            {!!__('installer.join_us.form_pepiniere')!!}
            </div>
            </a>
            </div>
            <div class="w-1/5">
            <a href="/telecharger-pdf" class="underline hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
            </a>
            </div>

            <div></div>
            </div>
            </div>
            <div class=" w-auto mt-4 xl:mt-0   ">
            <div class="xl:border-dashed px-4 xl:border-l-2 border-gray-700">
            <div class="pt-2 sm:pt-2 ">
            <a href="{{ route('login') }} ">
            <button type="button" style="background-color: #F18700" {{App\Helper::test('layouts.footer.join_us') }}
            class=" partie relative font-bold rounded-none text-white text-center  px-8 xl:px-16 md:px-12 md:py-2 py-2 xl:py-4 ">
            {!!__('layouts.footer.join_us')!!}
            </button>
            </a>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
@push('scripts')
    <script>
        document.getElementById('etape1').addEventListener('click', function() {
            var informationsSupplementaires = document.getElementById('info1');
            info1.classList.toggle('hidden');
        });
        document.getElementById('etape2').addEventListener('click', function() {
            var informationsSupplementaires = document.getElementById('info2');
            info2.classList.toggle('hidden');
        });
        document.getElementById('etape3').addEventListener('click', function() {
            var informationsSupplementaires = document.getElementById('info3');
            info3.classList.toggle('hidden');
        });
        document.getElementById('etape4').addEventListener('click', function() {
            var informationsSupplementaires = document.getElementById('info4');
            info4.classList.toggle('hidden');
        });
        document.getElementById('etape5').addEventListener('click', function() {
            var informationsSupplementaires = document.getElementById('info5');
            info5.classList.toggle('hidden');
        });

    </script>
@endpush
