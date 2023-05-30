@extends('layouts')


@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Nos Partenaires</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Partenaires</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<div class="container">


    <div class="row">
      <div class="col">
        <div class="" style="width: 15rem; height:15rem">
            <img src="img/Partenaire/sah.png" class="card-img-top" alt="sah"  style="height:6rem">
            <div class="card-body" style="text-align: center">
              <h6 class="card-title">Sah Analytics Internationnal  </h6>
          </div>
        </div>
    </div>
      <div class="col">
        <div class=""style="width: 15rem; height:15rem"  >
            <img src="img/Partenaire/abd.png" class="card-img-top" alt="ABS."  style="height:6rem" >
            <div class="card-body" style="text-align: center">
              <h6 class="card-title"> African Brocast Service</h6>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="" style="width: 18rem;height:15rem">
            <img src="img/Partenaire/abs.png" class="card-img-top" alt="ABD" style="height:6rem">
            <div class="card-body"style="text-align: center">
              <h6 class="card-title"> ABD VITIB Invest </h6>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="" style="width: 15rem;">
            <img src="img/Partenaire/atlantic.png" class="card-img-top" alt="Atlantic"  style="height:6rem">
            <div class="card-body" style="text-align: center">
              <h6 class="card-title"> Atlantic Future Technology </h6>

          </div>
        </div>
      </div>

    </div>
</div>

@endsection
