<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <section class="section">
        {!! $header !!}

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{$message}}</h4>
                        </div>
                        @php
                            $url = route('Front.admin.'.$route.'.update', ['activity' => $activity->id]);
                        @endphp
                        <div class="card-body">
                            <form action="$url" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre de la demande</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="title" type="text" id="name" class="form-control"
                                            name="title" value="{{ $activity->title }}" required>
                                    </div>
                                </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description de la demande</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control summernote-simple" id="description" name="content" rows="3">{{ $activity->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Résumé</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control summernote-simple" id="resume" name="resume" rows="3">{{ $activity->resume }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image </label>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="custom-file">
                                                <input type="file" class="form-control-file" id="image"
                                                    name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fichier </label>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="custom-file">
                                                <input type="file" class="form-control-file" id="image"
                                                    name="file">
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
