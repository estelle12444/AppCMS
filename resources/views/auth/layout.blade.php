<!DOCTYPE html>
<html  lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Authentification</title>
  </head>

  <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>

  <body style="background-image: url('{{ asset('img/Picture5.png') }}');background-size:cover">
    <section class="h-100 h-custom gradient-custom-2"style="background-image: url('{{ asset('img/Picture5.png') }}');background-size:cover" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                    @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </body>
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
</html>
