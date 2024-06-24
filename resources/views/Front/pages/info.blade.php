@extends('layouts')


@section('content')
    <div class="  bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <div class="p-5 py-20 mx-2 xl:mx-48">
            <div class="max-w-2xl mx-auto p-6">
                @if($activity->image)
                    <img alt="{{ $activity->translator['title']}}" src="{{ asset('storage/' .$activity->image) }}" data-toggle="tooltip"  style="height: 60px; width:auto">
                @else
                    <img src="{{ asset('img/annonce/appel_offre.jpg') }}" alt="News Info" class="w-full h-64 object-cover mb-4 rounded-lg">
                @endif
                <div class="pb-4" style="color: #F18700;">
                    <p> {!! __('info.job.name') !!} N °{{ $activity->id }}</p>
                </div>
                <h3 class="text-3xl font-bold mb-4"> {{ $activity->translator['title'] }}</h3>

                <div class="prose max-w-none text-justify mb-4">
                   <h2> <strong> {!! __('info.job.describe') !!}</strong></h2>
                    <p>
                        {{ strip_tags($activity->translator['content']) }}
                    </p>

                </div>
                <div class="prose max-w-none text-justify mb-4">
                    <p> {!! __('info.job.resume') !!}
                        {{ strip_tags($activity->translator['resume']) }}
                    </p>
                </div>
                <div class="prose max-w-none text-justify mb-4">
                    <p> {!! __('info.job.limit_date') !!}
                        {{ strip_tags($activity->translator['limit_date'] ) }}
                    </p>
                </div>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">
                <div class="xl:flex flex-row py-4 xl:py-8">
                    <div class="flex flex-row ml-2 pb-4">
                        <div class="w-1/5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                        <div class="w-3/5">
                            <a href="{{ asset('storage/' . $activity->translator['file']) }}" class="underline hover:underline">
                                <div class="text-lg">
                                    {!! __('news.job.download.tender') !!}
                                </div>
                            </a>
                        </div>
                        <div class="w-1/5">
                            <a href="{{ asset('storage/' . $activity->file) }}" title="{{ $activity->title }}"
                                class="underline hover:underline">
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
                </p>

                <a href="{{route('annonce')}}">
                    <button type="button" style="background-color: #F18700"
                        class="pl-4 pr-4 pt-2 pb-2 font-medium rounded-none white text-center ">
                        {!! __('info.job.previous') !!}
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
