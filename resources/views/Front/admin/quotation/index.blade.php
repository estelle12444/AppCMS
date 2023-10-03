@extends('Front.admin.layout')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Liste des Demandes de Cotations</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Demandes de Cotations</a></div>
            <div class="breadcrumb-item">Liste</div>
        </div>
    </div>

    <div class="section-body">
        {{-- <h2 class="section-title">DataTables</h2>
  <p class="section-lead">
    We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
  </p> --}}

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tables</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            N
                                        </th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Resume</th>
                                        <th>Date limite</th>
                                        <th>Image</th>
                                        <th>Fichier</th>
                                        {{-- <th>Date et Heure</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quotations as $quotation)
                                        <tr>
                                            <td>{{ $quotation->id }}</td>
                                            <td>{{ $quotation->title }}</td>
                                            <td>{{ Str::substr($quotation->content, 0, 150) . '...' }}</td>
                                            <td>{{ Str::substr($quotation->resume, 0, 150) . '...' }}</td>
                                            <td>{{ $quotation->limit_date }}</td>

                                            <td>
                                                <img alt="{{ $quotation->title }}"
                                                    src="{{ asset('storage/' . $quotation->image) }}" data-toggle="tooltip"
                                                    width="50">
                                            </td>
                                            <td>
                                                <a href="{{ asset('storage/' . $quotation->file) }}"
                                                    title="{{ $quotation->title }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                    </svg>
                                                </a>

                                            </td>
                                            {{-- <td>{{ $partner->created_at }}</td> --}}

                                            <td><a href="{{ route('Front.admin.quotation.edit', $quotation) }}"
                                                    class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>

                                                <form action="{{ route('Front.admin.quotation.destroy', $quotation->id) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-action trigger--fire-modal-6"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet appel d\'offres?')"><i
                                                            class="fas fa-trash"></i></button>

                                                </form>

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
</section>
@endsection
