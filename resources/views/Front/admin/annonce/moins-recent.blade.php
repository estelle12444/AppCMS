@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des annonces</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Anonnces</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Annonces moins récentes</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        {{-- <div class="col-12 col-sm-9 col-lg-9">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                            @foreach ($lessRecentAnnonces as $annonce)
                                                <li class="nav-item">
                                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ strtolower($annonce['type']) }}-tab" data-toggle="tab" href="#{{ strtolower($annonce['type']) }}" role="tab" aria-controls="{{ strtolower($annonce['type']) }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                                        {{ $annonce['type'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <div class="tab-content no-padding" id="myTab2Content">
                                            @foreach ($lessRecentAnnonces as $annonce)
                                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ strtolower($annonce['type']) }}" role="tabpanel" aria-labelledby="{{ strtolower($annonce['type']) }}-tab">
                                                    <!-- Contenu pour {{ $annonce['type'] }} -->
                                                    <h3>{{ $annonce['title'] }}</h3>
                                                    <p>{{ $annonce['content'] }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-12 col-sm-9 col-lg-9">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tender-tab" data-toggle="tab" href="#tender" role="tab" aria-controls="tender" aria-selected="true">Tenders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="career-tab" data-toggle="tab" href="#career" role="tab" aria-controls="career" aria-selected="false">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="job-tab" data-toggle="tab" href="#job" role="tab" aria-controls="job" aria-selected="false">Jobs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="quotation-tab" data-toggle="tab" href="#quotation" role="tab" aria-controls="quotation" aria-selected="false">Quotations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="event-tab" data-toggle="tab" href="#event" role="tab" aria-controls="event" aria-selected="false">Events</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    @foreach ($lessRecentAnnonces as $annonce)
                                        <div class="tab-pane fade" id="{{ strtolower($annonce['type']) }}" role="tabpanel" aria-labelledby="{{ strtolower($annonce['type']) }}-tab">
                                            <h3>{{ $annonce['title'] }}</h3>
                                            <p>{{ $annonce['content'] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
