@extends('Front.admin.layout')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Creation</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Partenaires</a></div>
        <div class="breadcrumb-item">Creation</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Enregistrement</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Front.admin.partner.store') }}" method="POST"enctype="multipart/form-data">
                        @csrf
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Raison Sociale</label>
                    <div class="col-sm-12 col-md-7">
                      <input name="title" type="text" class="form-control">

                      @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    {{-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Secteur d'activité</label>
                    <div class="col-sm-12 col-md-7">
                        <select name="sectors[]" class="form-control select2-tags" multiple>
                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}">{{ $sector->nom }}</option>
                            @endforeach
                        </select>
                        <div class="form-group">--}}
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Secteur d'activité</label>
                            <div class="col-sm-12 col-md-7">
                            <select name="sectors[]" class="form-control selectric" multiple="">
                                @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}">{{ $sector->nom }}</option>
                            @endforeach
                            </select>
                          </div>
                    </div>
                </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descriptif activité</label>
                    <div class="col-sm-12 col-md-7">

                        <textarea name="content" class="form-control summernote-simple"></textarea>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                    <div class="input-group col-sm-12 col-md-7">
                        <input type="file" name="image" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                            accept=".png, .jpg, .jpeg" >
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-7 offset-md-3">
                        <img id="imagePreview" src="#" alt="Image Preview"
                            style="display: none; max-width: 100%; max-height: 300px;">
                    </div>
                </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="submit">Envoyer</button>
                    </div>
                  </div>
                </form >
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('.select2-tags').select2({
            tags: true,
            tokenSeparators: [',', ' '],
            placeholder: "Sélectionnez les secteurs",
        });
    });
</script>

@endsection
