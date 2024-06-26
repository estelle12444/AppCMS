@extends('Front.admin.layout')

@section('content')
<style>
    /* Ajoutez ce code dans votre fichier CSS principal */

.alert {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Liste des comptes administrateurs</h4>
                <div class="card-header-form">
                    <a href="{{route('admin.create')}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="CREATE">
                        Ajouter un administrateur<i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->status ? 'Actif' : 'Inactif' }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('admin.update', ['user' => $admin->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-{{ $admin->status ? 'success' : 'gray' }} mr-2 " title="{{ $admin->status ? 'Désactiver' : 'Activer' }}"><i class="{{ $admin->status ? 'fas fa-toggle-on ' : 'fas fa-solid fa-toggle-off' }}"></i></button>
                                                </form>
                                                <form action="{{ route('admin.destroy',['user' => $admin->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir cet administrateur ?')" title="supprimer"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
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
</div>
@endsection
