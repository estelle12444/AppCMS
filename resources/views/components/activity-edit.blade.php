<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <section class="section">
        {!! $header !!}

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $message }}</h4>
                            <div class="card-header-form">
                                <a href="{{route('Front.admin.'.$route.'.index')}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="" data-original-title="retourner">
                                    Retour <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </div>
                        </div>
                        @php
                            $url = route('Front.admin.' . $route . '.update', ['activity' => $activity->id]);
                        @endphp
                        <div class="card-body">
                            <form action="{{$url}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="lang[0][translate_code]" value="fr">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre de la
                                        demande</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][title]" type="text" id="name" class="form-control"
                                            value="{{ $activity->title }}" required>
                                        @error('lang.0.title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description de
                                        la demande</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control summernote-simple" id="description" name="lang[0][content]" rows="3">{{ $activity->content }}</textarea>
                                        @error('lang.0.content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Résumé</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control summernote-simple" id="resume" name="lang[0][resume]" rows="3" >{{ $activity->resume }}</textarea>
                                        @error('lang.0.resume')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date
                                        Limite</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][limit_date]" type="datetime-local" class="form-control"
                                            value="{{ $activity->limit_date }}">

                                        @error('lang.0.limit_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image </label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="image"
                                                value="{{ $activity->image }}" name="lang[0][image]">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Attached Documents</label>
                                    <div class="input-group col-sm-12 col-md-7">
                                        <input type="file" name="lang[0][file]" class="form-control" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept=".pdf, .txt, .docx">
                                        <small id="inputGroupFileAddon04" class="form-text text-muted">Select a document (.pdf, .txt, .docx).</small>
                                    </div>
                                </div>

                                <!--   Step 2: English version (initially hidden) -->
                                <div class="card-header">
                                    <h2 id="form-header">Edition en version anglaise</h2>
                               </div>
                                <input type="hidden" name="lang[1][translate_code]" value="en">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre de la
                                        demande</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[1][title]" type="text" id="name" class="form-control"
                                            value="{{ $activity->title }}" required>
                                        @error('lang.1.title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description de
                                        la demande</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control summernote-simple" id="description" name="lang[1][content]" rows="3"
                                            value="">{{ $activity->content }}</textarea>
                                        @error('lang.1.content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Résumé</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control summernote-simple" id="resume" name="lang[1][resume]" rows="3"
                                            value="{{ $activity->resume }}"></textarea>
                                        @error('lang.1.resume')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Application
                                        Deadline</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[1][limit_date]" type="datetime-local" class="form-control"
                                            value="{{ $activity->limit_date }}">
                                        @error('lang.1.limit_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image </label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="image"
                                                value="{{ $activity->image }}" name=" lang[1][image]">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fichier
                                    </label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="image"
                                                name="lang[1][file]" value="{{ $activity->file }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
    </section>
</div>
