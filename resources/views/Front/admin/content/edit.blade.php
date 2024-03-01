@extends('Front.admin.layout')

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center text-primary">Edition</h2>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                         Veuillez remplir le formulaire à la fois en anglais et en français pour garantir une soumission précise et complète.
                    </div>
                    <form action="{{route('saveContent',['key'=>$key])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="lang[0][translate_code]" value="fr">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Texte français</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control summernote-simple" id="description" name="fr[content]" rows="3">{{ $contents['fr'][$key] }}</textarea>
                                @error('fr.content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Texte anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control summernote-simple" id="description" name="en[content]" rows="3">{{ $contents['en'][$key] }}</textarea>
                                @error('en.content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{ route('ContentIndex') }}" class=" ml-24 float-right btn btn-danger btn-action mr-1" data-toggle="tooltip" title="" data-original-title="retourner">
                                    Retour <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
