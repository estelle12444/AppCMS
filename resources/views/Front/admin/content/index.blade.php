@extends('Front.admin.layout')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Données</h4>
                    </div>
                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection
