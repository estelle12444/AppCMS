@extends('layouts')


@section('content')
<style>
    .fixed-size {
        /* width: 800px; Fixe la largeur à 300 pixels (ajustez selon vos besoins) */
        height: 100px; /* Fixe la hauteur à 100 pixels (ajustez selon vos besoins) */
        overflow: hidden; /* Cache tout le contenu qui dépasse les dimensions spécifiées */
        display: flex; /* Utilisation de flexbox pour aligner le contenu */
        align-items: center; /* Aligne le contenu verticalement au centre */
        /* justify-content: center;  Aligne le contenu horizontalement au centre */
         text-align: left;  /* Centre le texte à l'intérieur */
    }
</style>
        <div class="p-8 xl:p-24 bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
            <div class=" md:py-4 py-4 text-2xl xl:text-3xl md:text-3xl font-bold mb-4">
            <h3 class="py-4 xl:text-2xl md:text-2xl font-bold text-gray-500"> Activités</h3>
            </div>
            {{-- <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
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
                        <a href="#">  <strong class="hover:text-amber-500 ">
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
                            <a href="#">Opportunité d'emploi:<br>numérique, marketing</a>
                        </p>
                    </div>

                    <!-- Image 2 -->
                    <div class="relative bg-no-repeat"
                        style="background-image: url('img/page_6/karaoke.png'); background-size: cover; height: 0; padding-bottom: 45%;"></div>
                    <!-- Texte 2 -->
                    <div class="flex items-center justify-center text-center">
                        <p class="hover:text-amber-500  text-lg tracking-tight leading-none px-2  md:text-lg ">
                            <a href="#">   Qu'est-il arrivé à la nouvelle vidéo virale ?</a>
                        </p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="pt-24 md:py-8 xl:pt-16">
                <h3 class="py-4 xl:text-2xl md:text-2xl font-bold text-gray-500"> Activités</h3> --}}
                <div  class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 ">
                    @if (count($last_second_news) > 0)
                        @foreach($last_second_news as $last_second_new)

                            <div data-aos-duration="300" data-aos-delay="300" class="relative">
                                <img src="{{asset('storage/' .  $last_second_new->translator['image'])}}" alt="activite_other" class="rounded-lg h-48 xl:h-96 lg:h-80 w-full">
                                <div class="flex flex-col ">
                                    <p class=" fixed-size md:text-3xl text-xl hover:text-amber-500 font-bold my-3 " style="text-transform:uppercase">
                                        <a href="{{ route('news.Detail', ['activity' => $last_second_new->id]) }}">
                                            {!! Str::limit(strip_tags($last_second_new->translator['title']), 100, '...') !!}
                                        </a>
                                    </p>
                                    <p class="text-sm  text-left ">{!! Str::limit(strip_tags($last_second_new->translator['resume']), 220, '...') !!}</p>
                                </div>
                            </div>
                        @endforeach
                    @else

                        <div data-aos-duration="300" data-aos-delay="300" class="relative">
                            <img src="img/actu/Group_94.png" alt="Image 2" class="w-full h-auto rounded-lg">
                            <div class="flex flex-col  p-2">
                                <p class="md:text-3xl text-xl hover:text-amber-500 font-bold mb-2"><a href="#"> Qu'es ce qui arrive à la nouvelle <br> Vidéo virale?</a></p>
                                <p class="text-sm  text-left">Nous sommes fiers d'accueillir des entreprises innovantes qui <br>transforment l'avenir de la Côte d'Ivoire et de l'Afrique.</p>
                            </div>
                        </div>
                        <div data-aos-duration="300" data-aos-delay="300" class="relative">
                            <img src="img/actu/Group_99.png" alt="file_default" class="w-full h-auto rounded-lg">
                            <div class="flex flex-col  p-2">
                                <p class="md:text-3xl text-xl hover:text-amber-500 font-bold mb-2"><a href="#">  Qu'es ce qui arrive à la nouvelle  <br> IA, Chap Gpt?  </a></p>
                                <p class="text-sm text-justify">Nous sommes fiers d'accueillir des entreprises innovantes qui <br>  transforment l'avenir de la Côte d'Ivoire et de l'Afrique.</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        {{-- </div> --}}
        <div class=" bg-gradient-to-r from-gray-100 via-gray-100 to-gray-100">

            <div class="md:py-8 py-2 text-lg font-bold px-8 xl:px-24">
                <div class="flex items-center flex items-center justify-between">
                        <h3 class="md:text-3xl text-xl text-gray-500 ">
                            <a href="{{ route('media') }}">{!!__('actu.event.image')!!} </a>
                        </h3>
                        <div class="text-amber-500 hover:underline">
                            <p><a href="{{ route('media') }}">  {!!__('home.button.read_more')!!} </a></p>
                        </div>
                </div>

            </div>
            <div data-aos="flip-up" data-aos-duration="300" data-aos-delay="300" class=" px-8 xl:px-24 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-2">
                @if (count($elts) > 0)
                    @foreach($elts as $elt)
                        <div>
                            <img class="h-48 xl:h-64 lg:h-64 w-full" src="{{asset('storage/' .  $elt->translator['image'])}}" alt="">
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
            <div data-aos="flip-up" data-aos-duration="300" data-aos-delay="300" class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 pt-24 md:py-8 xl:pt-16">

                @if (count($news) > 0)
                    @foreach($news as $new)
                        <div data-aos-duration="300" data-aos-delay="300" class="relative">
                            <img src="{{ asset('storage/' . $new->translator['image']) }}" alt="{{ $new->translator['image'] }}" class="w-full h-48 xl:h-64 lg:h-64 rounded-lg">
                            <div class="flex flex-col pt-4">
                                <p class="text-xl hover:text-amber-500 font-bold mb-2"><a href="{{ route('news.Detail', ['activity' => $new->id]) }}">{{$new->translator['title'] }}</a></p>
                                <p class="text-sm text-justify"> {!! Str::limit(strip_tags($new->translator['resume']), 120, '...') !!}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div data-aos-duration="300" data-aos-delay="300" class="relative">
                        <img src="img/page_6/femme.png" alt="Image 2" class="w-full h-auto rounded-lg">
                        <div class="flex flex-col  p-2">
                            <p class="text-xl hover:text-amber-500 font-bold mb-2"><a href="#"> Produits technologiques</a></p>
                            <p class="text-sm text-justify">Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte d'Ivoire et de l'Afrique.</p>
                        </div>
                    </div>
                    <div data-aos-duration="300" data-aos-delay="300" class="relative">
                        <img src="img/page_6/femme.png" alt="Image 2" class="w-full h-auto rounded-lg">
                        <div class="flex flex-col  p-2">
                            <p class="text-xl hover:text-amber-500 font-bold mb-2"><a href="#"> Produits technologiques</a></p>
                            <p class="text-sm text-justify">Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte d'Ivoire et de l'Afrique.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>

@endsection
