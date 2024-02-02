@extends('Front.admin.layout')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>$key</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Français</th>
                                <th>Anglais</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents['fr'] as $key => $content)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $content }}</td>
                                    <td>{{ $contents['en'][$key] }}</td>
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
