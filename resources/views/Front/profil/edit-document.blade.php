@extends('Front.profil.layout')

@section('content')
    <div class="container">
        <h2>{{__('profil.document_edit.title')}}</h2>
        <form action="{{ route('documents.update', ['document' => $document->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">{{__('profil.document_edit.name')}}</label>
                <input type="text" name="name" value="{{ $document->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">{{__('profil.document_edit.file')}}</label>
                <textarea name="description" class="form-control">{{ $document->fichier }}</textarea>
            </div>

            <!-- Ajoutez d'autres champs pour la modification -->

            <button type="submit" class="btn btn-primary">{{__('profil.document_edit.save')}}</button>
        </form>

        {{-- <form action="{{ route('documents.destroy', ['document' => $document->id]) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Supprimer le document</button>
        </form> --}}
    </div>
@endsection
