@extends('layouts')


@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Presse</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/home">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">presse</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <section class="news section-padding" id="news">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Actualités</h2>
                        </div>

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="news-thumb" data-aos="fade-up">
                                <a href="news-detail.html" class="news-image-hover news-image-hover-warning">
                                    <img src="img/carousel-1.jpg" class="img-fluid large-news-image news-image" alt="">
                                </a>

                                <div class="news-category bg-warning text-white">News</div>

                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <a href="news-detail.html" class="news-title-link">The rise of the gig economy spells the end for these workers the old system</a>
                                    </h5>

                                    <span class="text-muted">22 hours ago</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100">

                                    <a href="news-detail.html" class="news-image-hover news-image-hover-primary">
                                        <img src="img/carousel-2.jpg" class="img-fluid news-image" alt="">
                                    </a>

                                    <div class="news-category bg-primary text-white">Events</div>
                                </div>

                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="news-detail.html" class="news-title-link">Job Opportunities: Digital, Marketing</a>
                                        </h5>

                                        <div class="d-flex flex-wrap">
                                            <span class="text-muted me-2">
                                                <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                                Alaska,
                                            </span>

                                            <span class="text-muted">August 6, 2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100" data-aos="fade-up">

                                    <a href="news-detail.html" class="news-image-hover news-image-hover-success">
                                        <img src="img/carousel-4.jpg" class="img-fluid news-image" alt="">
                                    </a>

                                    <div class="news-category bg-success text-white">News</div>
                                </div>

                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="news-detail.html" class="news-title-link">What happened to new viral video?</a>
                                        </h5>

                                        <span class="text-muted">6 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection
