@extends('layouts')


@section('content')
    <div class="pt-16 md:pt-32 px-4 md:px-6 xl:px-32 bg-gradient-to-r from-orange-100 from-20% to-gray-100 to-90%">
        <h1 class="text-gray-500 pb-4 text-xl md:text-2xl lg:text-3xl font-bold">
            Nos Evènements
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-2">
            <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/&.png')}}" alt="">
            </div>

            <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">>
                <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/1.png')}}" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">>
                <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/2.png')}}" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">>
                <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/3.png')}}" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/6.png')}}" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/7.png')}}" alt="">
            </div>
        </div>

    </div>
@endsection
