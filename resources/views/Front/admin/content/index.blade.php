@extends('Front.admin.layout')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="container mt-4">
                        @foreach ($sections as $section)
                        <h2 class="text-center mb-4">
                            @if ($section['id'] == 'home')
                                Gestion des pages
                            @elseif ($section['id'] == 'layouts')
                                Gestion des élements d'entête et de pied de page
                            @elseif ($section['id'] == 'profil')
                                Gestion de l'espace administration client
                            @elseif ($section['id'] == 'image')
                                Gestion des Images
                            @endif
                        </h2>
                            <div class="card">
                                <div class="container mt-4">
                                    {{-- Section: {{ $section['title'] }} --}}
                                    <div class="accordion" id="accordion{{ $section['id'] }}">
                                        <div class="card-header " id="{{ $section['id'] }}Section">
                                            <h2 class="mb-0 btn-link" data-toggle="collapse" data-target="#collapse{{ $section['id'] }}" aria-expanded="true" aria-controls="collapse{{ $section['id'] }}">
                                                {{ $section['title'] }}
                                                <i class='fa fa-chevron-down'></i>
                                            </h2>

                                        </div>
                                        <div id="collapse{{ $section['id']}}" class="collapse show" aria-labelledby="{{ $section['id'] }}Section"
                                            data-parent="#accordion{{ $section['id'] }}">
                                            <div class="card-body">
                                                @foreach ($section['items'] as $key => $title)
                                                    <div class="card mb-4">
                                                        <div class="row">
                                                            <div class="col-md-6 text-left">
                                                                <h6 class="card-title text-primary">{{ $title }}</h6>
                                                            </div>
                                                                @if(Str::startsWith($key, 'image'))
                                                                <div class="col-md-6 text-right">
                                                                    <a href="{{ route('ImageContentPage', ['key' => $key]) }}" class="btn btn-primary btn-action" data-toggle="tooltip" title="Voir plus">
                                                                        <i class="fas fa-edit"></i> Modifier
                                                                    </a>
                                                                </div>
                                                            @else

                                                                <div class="col-md-6 text-right">
                                                                    <a href="{{ route('ContentPage', ['key' => $key]) }}" class="btn btn-primary btn-action" data-toggle="tooltip" title="Voir plus">
                                                                        <i class="fas fa-edit"></i> Modifier
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
