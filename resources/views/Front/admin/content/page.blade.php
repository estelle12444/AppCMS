@extends('Front.admin.layout')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header-form">
                    <a class="btn btn-primary btn-action mr-1 float-right" href="{{ route('ContentPageGroup', ['key' => $key]) }}">Formulaire groupé</a>
                    <h2 class="text-primary">Page: <strong class="capitalcase">{{$title}}</strong></h2>
                </div>

                <div class="card-body">

                    <div class="alert alert-info">
                        Ci-dessous, vous trouverez des éléments représentant chaque information de la page {{$key}}. N'hésitez pas à modifier les informations en anglais et en français si nécessaire, afin d'assurer un suivi optimal.
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Français</th>
                                <th>Anglais</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents['fr'] as $key => $content)
                                <tr>
                                    <td class="">{!! strip_tags($content) !!}</td>
                                    <td>{!! strip_tags($contents['en'][$key]) !!}</td>
                                    <td>
                                        <a href="{{ route('ContentPageEdit', ['key' => $key]) }}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip"
                                            title="Voir plus" data-original-title="Voir plus">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
