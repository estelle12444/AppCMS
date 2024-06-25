@extends('layouts')


@section('content')
<section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png); background-size: cover;">
    <div class="px-4 mx-auto max-w-screen-xl text-center pt-24 pb-16  md:pt-20  lg:py-0">
        <h1 data-aos="zoom-in" data-aos-duration="500"data-aos-delay="700" {{App\Helper::test('opportunity.zone.title') }}  class=" partie relative text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:pt-8 pt-10 lg:pb-8 lg:pt-32 xl:text-5xl lg:text-6xl ">
            {!! __('opportunity.zone.title') !!}
            <p class="pt-8 "></p>
        </h1>
    </div>
</section>
<div  class=" bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90% ">
    {{-- <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="800" class=" xl:py-10 lg:py-4 pt-10 lg:pb-10 md:px-4 px-4 lg:pr-0  xl:px-20 grid xl:grid-cols-5 md:grid-cols-2  grid-cols-2 gap-2 xl:gap-4 " style="overflow-x: hidden">
        <div {{App\Helper::test('opportunity.zone.administration_zone') }}  class=" partie relative bg-amber-500 font-extrabold rounded-lg p-4 text-white text-center " style=" height:100px ">
            {!! __('opportunity.zone.administration_zone') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.production_zone_assembly_industries') }}  class="partie relative bg-green-500  font-extrabold rounded-lg p-4 text-white text-center  ">
            {!! __('opportunity.zone.production_zone_assembly_industries') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.production_zone_biotechnology_industries') }}  class=" partie relative bg-orange-200  font-extrabold rounded-lg pt-2 text-white text-center " style=" height:100px ">
            {!! __('opportunity.zone.production_zone_biotechnology_industries') !!}
        </div>

        <div {{App\Helper::test('opportunity.zone.production_zone_offices') }}  class=" partie relative bg-yellow-300  font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.production_zone_offices') !!}
        </div>

        <div {{App\Helper::test('opportunity.zone.future_development') }}  class=" partie relative bg-purple-300 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.future_development') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.logistics_zone') }}  class=" partie relative bg-amber-800 font-extrabold rounded-lg p-4 text-white text-center ">
            {!! __('opportunity.zone.logistics_zone') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.residential_zone') }}  class=" partie relative bg-pink-300 font-extrabold rounded-lg p-4 text-white text-center ">
            {!! __('opportunity.zone.residential_zone') !!}
        </div>

        <div {{App\Helper::test('opportunity.zone.bus_station') }}  class=" partie relative bg-slate-700 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.bus_station') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.green_zone') }}  class=" partie relative bg-green-400 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.green_zone') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.utility') }}  class=" partie relative bg-gray-400 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.utility') !!}
        </div>
    </div> --}}
    <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="800" class=" xl:py-10 lg:py-4 pt-10 lg:pb-10 md:px-4 px-4 lg:pr-0  xl:px-20 grid xl:grid-cols-5 md:grid-cols-2  grid-cols-2 gap-2 xl:gap-4 " style="overflow-x: hidden">
        <div {{App\Helper::test('installer.section.eligibility.activities.industrial') }}  class="  partie relative bg-gray-400 font-extrabold rounded-lg p-4 text-white text-center " >

            {!! __('installer.section.eligibility.activities.industrial') !!}
        </div>
        <div {{App\Helper::test('installer.section.eligibility.activities.capacity_building') }}  class="partie relative bg-green-500  font-extrabold rounded-lg p-4 text-white text-center  ">
            {!! __('installer.section.eligibility.activities.capacity_building') !!}
        </div>
        <div {{App\Helper::test('installer.section.eligibility.activities.research_development') }}  class=" partie relative bg-orange-200  font-extrabold rounded-lg p-4 text-white text-center " >
            {!! __('installer.section.eligibility.activities.research_development') !!}
        </div>

        <div {{App\Helper::test('installer.section.eligibility.activities.accompanying') }}  class=" partie relative bg-yellow-300  font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('installer.section.eligibility.activities.accompanying') !!}
        </div>

        <div {{App\Helper::test('installer.section.eligibility.activities.services') }}  class=" partie relative bg-purple-300 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('installer.section.eligibility.activities.services') !!}
        </div>
        {{-- <div {{App\Helper::test('opportunity.zone.logistics_zone') }}  class=" partie relative bg-amber-800 font-extrabold rounded-lg p-4 text-white text-center ">
            {!! __('opportunity.zone.logistics_zone') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.residential_zone') }}  class=" partie relative bg-pink-300 font-extrabold rounded-lg p-4 text-white text-center ">
            {!! __('opportunity.zone.residential_zone') !!}
        </div>

        <div {{App\Helper::test('opportunity.zone.bus_station') }}  class=" partie relative bg-slate-700 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.bus_station') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.green_zone') }}  class=" partie relative bg-green-400 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.green_zone') !!}
        </div>
        <div {{App\Helper::test('opportunity.zone.utility') }}  class=" partie relative bg-gray-400 font-extrabold rounded-lg p-4 text-white text-center">
            {!! __('opportunity.zone.utility') !!}
        </div> --}}
    </div>

</div>
<div class="bg-gradient-to-r from-gray-100 from-20%  to-orange-100 to-90%">
    <div class="  max-w-full xl:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mx-auto px-4 xl:px-16  pt-16  ">
        <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" {{App\Helper::test('opportunity.projects.future_projects_title') }} class=" partie relative mb-16 text-4xl xl:text-5xl md:text-4xl text-left font-bold tracking-tight text-gray-900">
           <span class= ""  >{!! __('opportunity.projects.future_projects_title') !!}</span>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-1 gap-2 md:px-2">
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex flex-col md:flex-row items-center">
                <div {{App\Helper::test('image.opportunity.warehouses') }}  class="partie relative md:w-1/2">
                    <img class="h-64 w-full rounded-lg md:pr-8 mb-4 md:mb-0" src="{{asset(__('image.opportunity.warehouses'))}}" alt="">
                </div>
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0">
                        <div  {{App\Helper::test('opportunity.projects.future_projects_warehouses_for_rent') }}  class=" partie relative mb-2 text-2xl lg:text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.future_projects_warehouses_for_rent') !!}
                        </div>
                        <div  {{App\Helper::test('opportunity..projects.future_projects_warehouses_description') }}  class=" partie relative text-justify ">
                            {!! __('opportunity.projects.future_projects_warehouses_description') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex py-4 lg:py-10 flex-col md:flex-row items-center">
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0 xl:pr-8">
                        <div {{App\Helper::test('opportunity.projects.promotion_block_a_title') }}  class=" partie relative mb-2 text-2xl lg:text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.promotion_block_a_title') !!}
                        </div>
                        <div {{App\Helper::test('opportunity.projects.promotion_block_a_description') }}  class=" partie relative  text-justify ">
                            {!! __('opportunity.projects.promotion_block_a_description') !!}
                        </div>
                    </div>
                </div>
                <div {{App\Helper::test('image.opportunity.promotion') }}  class="partie relative md:w-1/2">
                    <img class="h-64 w-full rounded-lg  mb-4 md:mb-0" src="{{asset(__('image.opportunity.promotion'))}}" alt="">
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex flex-col md:flex-row items-center">
                <div {{App\Helper::test('image.opportunity.office') }}  class="partie relative md:w-1/2">
                    <img class="h-64 w-full rounded-lg md:pr-8 mb-4 md:mb-0" src="{{asset(__('image.opportunity.office'))}}" alt="">
                </div>
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0">
                        <div {{App\Helper::test('opportunity.projects.future_projects.office_buildings') }}  class=" partie relative mb-2 text-2xl lg:text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.future_projects.office_buildings') !!}
                        </div>
                        <div {{App\Helper::test('opportunity.future_projects.office_buildings_description') }}  class=" partie relative text-justify ">
                            {!! __('opportunity.projects.future_projects.office_buildings_description') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex py-4 lg:py-10 flex-col md:flex-row items-center">
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0 xl:pr-8">
                        <div {{App\Helper::test('opportunity.projects.business_hotels_title') }}  class=" partie relative mb-2 text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.business_hotels_title') !!}
                        </div>
                        <div {{App\Helper::test('opportunity.projects.business_hotels_description') }}  class=" partie relative text-justify ">
                            {!! __('opportunity.projects.business_hotels_description') !!}
                        </div>
                    </div>
                </div>
                <div {{App\Helper::test('image.opportunity.business_hotels') }}  class=" partie relative md:w-1/2">
                    <img class="h-64 w-full rounded-lg  mb-4 md:mb-0" src="{{asset(__('image.opportunity.business_hotels'))}}" alt="">
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex flex-col md:flex-row items-center">
                <div {{App\Helper::test('image.opportunity.university') }}  class=" partie relative  md:w-1/2">
                    <img class="h-64 w-full rounded-lg md:pr-8 mb-4 md:mb-0" src="{{asset(__('image.opportunity.university'))}}" alt="">
                </div>
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0">
                        <div {{App\Helper::test('opportunity.projects.university_title') }}  class=" partie relative mb-2 text-2xl lg:text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.university_title') !!}
                        </div>
                        <div {{App\Helper::test('opportunity.projects.university_description') }}  class=" partie relative text-justify ">
                            {!! __('opportunity.projects.university_description') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex py-4 lg:py-10 flex-col md:flex-row items-center">
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0 xl:pr-8">
                        <div {{App\Helper::test('opportunity.projects.promotion_block_b_title') }}  class=" partie relative mb-2 text-2xl lg:text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.promotion_block_b_title') !!}
                        </div>
                        <div  {{App\Helper::test('opportunity.projects.promotion_block_a_description') }}  class=" partie relative text-justify ">
                            {!! __('opportunity.projects.promotion_block_a_description') !!}
                        </div>
                    </div>
                </div>
                <div {{App\Helper::test('image.opportunity.immobilier') }}  class=" partie relative md:w-1/2">
                    <img class="h-64 w-full rounded-lg  mb-4 md:mb-0" src="{{asset(__('image.opportunity.immobilier'))}}" alt="">
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex flex-col md:flex-row items-center">
                <div {{App\Helper::test('image.opportunity.clinic') }}  class=" partie relative md:w-1/2">
                    <img class="h-64 w-full rounded-lg md:pr-8 mb-4 md:mb-0" src="{{asset(__('image.opportunity.clinic'))}}" alt="">
                </div>
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0">
                        <div {{App\Helper::test('opportunity.projects.international_medical_clinic_title') }}  class=" partie relative mb-2 text-2xl lg:text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.international_medical_clinic_title') !!}
                        </div>
                        <div {{App\Helper::test('opportunity.projects.international_medical_clinic_description') }}  class=" partie relative text-justify ">
                            {!! __('opportunity.projects.international_medical_clinic_description') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex py-4 lg:py-10 flex-col md:flex-row items-center">
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0 xl:pr-8">
                        <div {{App\Helper::test('opportunity.projects.cultural_center_title') }}  class=" partie relative mb-2 text-2xl lg:text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.cultural_center_title') !!}
                        </div>
                        <div {{App\Helper::test('opportunity.projects.promotion_block_a_description') }}  class=" partie relative text-justify ">
                            {!! __('opportunity.projects.promotion_block_a_description') !!}
                        </div>
                    </div>
                </div>
                <div {{App\Helper::test('image.opportunity.centre_cultu') }}  class=" partie relative md:w-1/2">
                    <img class="h-64 w-full rounded-lg  mb-4 md:mb-0" src="{{asset(__('image.opportunity.centre_cultu'))}}" alt="">
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="700" class="flex flex-col md:flex-row items-center">
                <div {{App\Helper::test('image.opportunity.centre_commer') }}  class=" partie relative  md:w-1/2">
                    <img class="h-64 w-full rounded-lg md:pr-8 mb-4 md:mb-0" src="{{asset(__('image.opportunity.centre_commer'))}}" alt="">
                </div>
                <div class="md:w-1/2">
                    <div class="md:px-0  xl:px-0">
                        <div {{App\Helper::test('opportunity.projects.future_projects.office_buildings') }}  class=" partie relative mb-2 text-2xl lg:text-4xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            {!! __('opportunity.projects.future_projects.office_buildings') !!}
                        </div>
                        <div {{App\Helper::test('opportunity.projects.future_projects.office_buildings_description') }}  class=" partie relative  text-justify ">
                            {!! __('opportunity.projects.future_projects.office_buildings_description') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" px-6 md:py-8 lg:py-20 md:px-2 bg-no-repeat" >
            <div class="xl:flex flex-row ">
                <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="500" class="xl:basis-1/2 xl:text-lg xl:text-left md:text-center">
                    <div {{App\Helper::test('opportunity.section.title') }}  class=" partie relative text-3xl text-slate-600 md:text-5xl xl:text-5xl font-bold">
                        {!! __('opportunity.section.title') !!}
                    </div>

                    <div {{App\Helper::test('opportunity.section.subtitle') }}  class=" partie relative pt-4 xl:pt-8 pb-4 xl:pb-8 xl:text-lg ">
                        {!! __('opportunity.section.subtitle') !!}
                    </div>
                    <div class="grid grid-cols-2 xl:grid-cols-2 gap-2 xl:gap-2 xl:px-0 md:px-16 pt-4">
                        <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="200"class="flex items-center  rounded-lg " role="alert">
                            <div class="inline-flex items-center  flex-shrink-0 w-6 h-6 xl:w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                <img src="img/icon/check.png" alt="">
                            </div>
                            <div {{App\Helper::test('opportunity.section.office_buildings') }}  class=" partie relative ml-2 xl:ml-4 text-md font-normal">
                                {!! __('opportunity.section.office_buildings') !!}
                            </div>
                        </div>

                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="flex items-center  pt-8 rounded-lg " role="alert">
                            <div class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                            </div>
                            <div {{App\Helper::test('opportunity.section.university') }}  class=" partie relative ml-4 text-md font-normal">
                                {!! __('opportunity.section.university') !!}
                            </div>
                        </div>
                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"class="flex items-center  pt-8 rounded-lg " role="alert">
                            <div class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                            </div>
                            <div {{App\Helper::test('opportunity.section.warehouses_for_rent') }}  class=" partie relative ml-4 text-md font-normal">
                                {!! __('opportunity.section.warehouses_for_rent') !!}
                            </div>
                        </div>
                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="flex items-center  pt-8 rounded-lg " role="alert">
                            <div
                                class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                <img src="img/icon/check.png" alt="">
                            </div>
                            <div  {{App\Helper::test('opportunity.section.international_medical_clinic') }}  class=" partie relative ml-4 text-md font-normal">
                                {!! __('opportunity.section.international_medical_clinic') !!}
                            </div>
                        </div>

                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="flex items-center pt-8 rounded-lg " role="alert">
                            <div class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                            </div>
                            <div {{App\Helper::test('opportunity.section.commercial_alley') }}  class=" partie relative ml-4 text-md font-normal">
                                {!! __('opportunity.section.commercial_alley') !!}
                            </div>
                        </div>
                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="flex items-center pt-8 rounded-lg " role="alert">
                            <div class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                <img src="img/icon/check.png" alt="">
                            </div>
                            <div {{App\Helper::test('opportunity.section.cultural_center') }}  class=" partie relative ml-4 text-md font-normal">
                                {!! __('opportunity.section.cultural_center') !!}
                            </div>
                        </div>

                        </div>

                        {{-- <div class="flex xl:items-left md:px-16 items-center py-12 xl:py-8  rounded-lg " role="alert" >
                            <div >
                                <a href="/opportunity" class=" partie relative inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
                                    {!!__('home.button.read_more')!!}
                                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                    <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="700" class="xl:basis-1/2">
                        <div {{App\Helper::test('image.opportunity.project_service') }}  class=" partie relative" >
                            <img src="{{asset(__('image.opportunity.project_service'))}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
