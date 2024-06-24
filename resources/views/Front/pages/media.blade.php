@extends('layouts')


@section('content')
    <div class="pt-16 md:pt-32 px-4 md:px-6 xl:px-32 bg-gradient-to-r from-orange-100 from-20% to-gray-100 to-90%">
        <h1 class=" pb-4 text-xl md:text-2xl lg:text-3xl font-bold mb-4">
           Tous nos évènements en Images
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">
            @if(count($news)>0)
                @foreach ($news as $item)
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('storage/' .  $item->translator['image'])}}" alt="">

                @endforeach
            @else

                <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/&.png')}}" alt="">

                <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/1.png')}}" alt="">
                </div>
                <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/2.png')}}" alt="">
                </div>
                <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/3.png')}}" alt="">
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/6.png')}}" alt="">
                </div>
                <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/7.png')}}" alt="">
                </div>
            @endif
        </div>

    </div>
@endsection
