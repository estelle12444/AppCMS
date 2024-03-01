@extends('layouts')


@section('content')
        <div class="p-8 xl:p-24 bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
            <div class=" md:py-4 py-4 text-2xl xl:text-2xl md:text-2xl font-bold text-gray-500">
            <h1> Activités</h1>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <!-- Colonne 1 : Vidéo -->
                <div class="lg:col-span-2">
                    <div class="videoWrapper flex justify-center items-center rounded-lg border-solid border-4 border-gray-300">
                        <video autoplay loop muted class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.png">
                            <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="overlay"></div>
                    </div>
                    <h1 class="text-lg lg:text-2xl pt-4 text-gray-500">
                        <a href="{{ route('news.Detail') }}">  <strong>
                            L'essor de l'économie des petits boulots sonne la fin pour ces travailleurs de l'ancien système
                        </strong> </a>
                    </h1>
                </div>
                <!-- Colonne 2 : Images 1 et 2 avec texte superposé -->
                <div class="lg:col relative">
                    <!-- Image 1 -->
                    <div class="relative bg-no-repeat mb-2"
                        style="background-image: url('img/page_6/carousel_petit.png'); background-size: cover; height: 0; padding-bottom: 45%;"></div>
                    <!-- Texte 1 -->
                    <div class=" flex items-center">
                        <p class=" hover:text-amber-500 text-lg  mb-2 md:mb-0 lg:mb-0 lg:pl-4 md:text-lg">
                            <a href="{{ route('news.Detail') }}">Opportunité d'emploi:<br>numérique, marketing</a>
                        </p>
                    </div>

                    <!-- Image 2 -->
                    <div class="relative bg-no-repeat"
                        style="background-image: url('img/page_6/karaoke.png'); background-size: cover; height: 0; padding-bottom: 45%;"></div>
                    <!-- Texte 2 -->
                    <div class="flex items-center justify-center text-center">
                        <p class="hover:text-amber-500  text-lg tracking-tight leading-none px-2  md:text-lg ">
                            <a href="{{ route('news.Detail') }}">   Qu'est-il arrivé à la nouvelle vidéo virale ?</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="pt-24 md:py-8 xl:pt-16">
                <h3 class="py-4 xl:text-2xl md:text-2xl font-bold text-gray-500"> Autres Activités</h3>
                <div  class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 ">
                    <div data-aos-duration="300" data-aos-delay="300" class="relative">
                        <img src="img/actu/Group_94.png" alt="Image 2" class="w-full h-auto rounded-lg">
                        <div class="flex flex-col  p-2">
                            <p class="text-3xl hover:text-amber-500 font-bold mb-2"><a href="{{ route('news.Detail') }}"> Qu'es ce qui arrive à la nouvelle <br> Vidéo virale?</a></p>
                            <p class="text-sm  text-left">Nous sommes fiers d'accueillir des entreprises innovantes qui <br>transforment l'avenir de la Côte d'Ivoire et de l'Afrique.</p>
                        </div>
                    </div>
                    <div data-aos-duration="300" data-aos-delay="300" class="relative">
                        <img src="img/actu/Group_99.png" alt="Image 2" class="w-full h-auto rounded-lg">
                        <div class="flex flex-col  p-4">
                            <p class="text-3xl hover:text-amber-500 font-bold mb-2"><a href="{{ route('news.Detail') }}">  Qu'es ce qui arrive à la nouvelle  <br> IA, Chap Gpt?  </a></p>
                            <p class="text-sm text-justify">Nous sommes fiers d'accueillir des entreprises innovantes qui <br>  transforment l'avenir de la Côte d'Ivoire et de l'Afrique.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=" bg-gradient-to-r from-gray-100 via-gray-100 to-gray-100">

            <div class="md:py-8 py-2 text-lg font-bold px-8 xl:px-24">
                <div class="flex items-center flex items-center justify-between">
                    <h3> {!!__('actu.event.image')!!}</h3>
                    <div class="text-amber-500 hover:underline">
                        <p>
                        <a href="{{ route('media') }}">  {!!__('home.button.read_more')!!} </a>
                        </p>
                    </div>
                </div>

            </div>
            <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300" class=" px-8 xl:px-24 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-2">
                @if (count($elts) > 0)
                    @foreach($elts as $elt)
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('storage/public/new' .  $elt->image)}}" alt="">
                        </div>
                    @endforeach

                @else
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/&.png')}}" alt="">
                    </div>
                    <div >
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/1.png')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/2.png')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/3.png')}}" alt="">
                    </div>
                    <div >
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/6.png')}}" alt="">
                    </div>
                    <div >
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('img/actu/7.png')}}" alt="">
                    </div>
                @endif
            </div>
        </div>
        <div class="p-8 xl:p-24 bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
            <div data-aos="fade-up" data-aos-duration="300" data-aos-delay="300" class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 pt-24 md:py-8 xl:pt-16">
                @if (count($news) > 0)
                    @foreach($news as $new)
                        <div data-aos-duration="300" data-aos-delay="300" class="relative">
                            <img src="{{ asset('storage/' . $new->translator['image']) }}" alt="{{ $new->translator['image'] }}" class="w-full h-auto rounded-lg">
                            <div class="flex flex-col pt-4">
                                <p class="text-xl hover:text-amber-500 font-bold mb-2"><a href="{{ route('news.Detail', ['id' => $new->id]) }}">{{$new->translator['title'] }}</a></p>
                                <p class="text-sm text-justify">{{ $new->translator['content'] }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div data-aos-duration="300" data-aos-delay="300" class="relative">
                        <img src="img/page_6/femme.png" alt="Image 2" class="w-full h-auto rounded-lg">
                        <div class="flex flex-col  p-4">
                            <p class="text-xl hover:text-amber-500 font-bold mb-2"><a href="{{ route('news.Detail') }}"> Produits technologiques</a></p>
                            <p class="text-sm text-justify">Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte d'Ivoire et de l'Afrique.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>

@endsection
