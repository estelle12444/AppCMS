@extends('Front.admin.layout')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Creation</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Appels à Candidature</a></div>
        <div class="breadcrumb-item">Création</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Enregistrement </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Front.admin.career.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre de la candidature</label>
                    <div class="col-sm-12 col-md-7">
                      <input name="title" type="text" class="form-control">

                      @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description de la candidature</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea name="content" class="form-control summernote-simple"></textarea>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Resume de la candidature</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea name="resume" class="form-control"></textarea>
                        @error('resume')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Limite de l'appel</label>
                    <div class="col-sm-12 col-md-7">
                      <input name="limit_date" type="datetime-local" class="form-control bg-white datepicker" data-date-format="m/d/Y G:iK" data-enable-time="true">


                      @error('limit_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
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
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Documents ci-joints
                    </label>
                    <div class="input-group col-sm-12 col-md-7">
                        <input type="file" name="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                            accept=".pdf, .txt, .docx">
                        <small id="inputGroupFileAddon04" class="form-text text-muted">Sélectionnez un
                            document (.pdf, .txt, .docx).</small>
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



@endsection
