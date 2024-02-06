@extends('Front.admin.layout')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                {{-- <div class="card">
                    <h2>Entête et Pied de page</h2>
                    <div class="container mt-4">
                        @foreach ($head as $elements => $ender)
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title text-primary">{{ $ender['title'] }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-text">Nombre d'éléments : {{ $ender['count'] }}</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="{{ route('ContentPage', ['key' => $elements]) }}" class="btn btn-primary btn-action" data-toggle="tooltip"
                                               title="Voir plus">
                                                <i class="fas fa-table"></i> Voir plus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-header">
                        <h2>Informations</h2>
                    </div>
                    {{-- <div class="card-body">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr >
                                    <th>Pages</th>
                                    <th>Nombre</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page => $value)
                                <tr>
                                    <td>{{ $value['title'] }}</td>
                                    <td>{{ $value['count'] }}</td>
                                    <td>
                                        <a href="{{route('ContentPage', ['key' => $page])}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                        title="" data-original-title="Voir plus">
                                        <i class="fas fa-table"></i>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container mt-4">
                        @foreach ($pages as $page => $value)
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title text-primary">{{ $value['title'] }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-text">Nombre d'élement: {{ $value['count'] }}</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="{{ route('ContentPage', ['key' => $page]) }}" class="btn btn-primary btn-action" data-toggle="tooltip"
                                               title="Voir plus">
                                                <i class="fas fa-table"></i> Voir plus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <h2>Administration Client</h2>
                    <div class="container mt-4">
                        @foreach ($profil as $element => $info)
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title text-primary">{{ $info['title'] }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-text">Nombre d'éléments : {{ $info['count'] }}</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="{{ route('ContentPage', ['key' => $element]) }}" class="btn btn-primary btn-action" data-toggle="tooltip"
                                               title="Voir plus">
                                                <i class="fas fa-table"></i> Voir plus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div> --}}

                <div class="card">
                    <div class="container mt-4">
                        {{-- Section 1: Entête et Pied de page --}}
                        <div class="accordion" id="accordionHeader">
                            <div class="card-header" id="headerSection">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseHeader" aria-expanded="true" aria-controls="collapseHeader">
                                        Entête et Pied de page
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseHeader" class="collapse show" aria-labelledby="headerSection" data-parent="#accordionHeader">
                                <div class="card-body">
                                    @foreach ($head as $elements => $ender)
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5 class="card-title text-primary">{{ $ender['title'] }}</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="card-text">Nombre d'éléments : {{ $ender['count'] }}</p>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="{{ route('ContentPage', ['key' => $elements]) }}" class="btn btn-primary btn-action" data-toggle="tooltip"
                                                            title="Voir plus">
                                                            <i class="fas fa-table"></i> Voir plus
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Section 2: Informations --}}
                        <div class="accordion" id="accordionInfo">
                            <div class="card-header" id="infoSection">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseInfo" aria-expanded="false" aria-controls="collapseInfo">
                                        Informations
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseInfo" class="collapse" aria-labelledby="infoSection" data-parent="#accordionInfo">
                                <div class="card-body">
                                    @foreach ($pages as $page => $value)
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5 class="card-title text-primary">{{ $value['title'] }}</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="card-text">Nombre d'élement : {{ $value['count'] }}</p>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="{{ route('ContentPage', ['key' => $page]) }}" class="btn btn-primary btn-action" data-toggle="tooltip"
                                                            title="Voir plus">
                                                            <i class="fas fa-table"></i> Voir plus
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Section 3: Administration Client --}}
                        <div class="accordion" id="accordionAdmin">
                            <div class="card-header" id="adminSection">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin">
                                        Administration Client
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseAdmin" class="collapse" aria-labelledby="adminSection" data-parent="#accordionAdmin">
                                <div class="card-body">
                                    @foreach ($profil as $element => $info)
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5 class="card-title text-primary">{{ $info['title'] }}</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="card-text">Nombre d'éléments : {{ $info['count'] }}</p>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="{{ route('ContentPage', ['key' => $element]) }}" class="btn btn-primary btn-action" data-toggle="tooltip"
                                                            title="Voir plus">
                                                            <i class="fas fa-table"></i> Voir plus
                                                        </a>
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


            </div>
        </div>
    </div>
@endsection
