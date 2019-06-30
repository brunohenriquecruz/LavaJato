<link rel="icon" href="{{ asset('img/favicon.ico') }}" >
@extends('layouts.app')

@section('content')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cadastro de Veículo</title>

    <!-- CSS STYLES -->
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- CSS STYLES -->

<body class="bg-gradient-primary">
<form method="POST" action="">
@csrf
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-register-image">
          <img src="{{ asset('img/2.1.JPG') }}" alt="cadImage">
          </div>
          
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Cadastro de Veículo') }}</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  
                  <div class="col-sm-6">
                    <p></p>
                    <input type="text" class="form-control form-control-user" id="model" name="model" placeholder="{{ __('Modelo') }}">
                  </div>
                  <div class="col-sm-6">
                    <p></p>
                    <input type="text" class="form-control form-control-user" id="color" name="color" placeholder="{{ __('Cor') }}">
                  </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="plate" name="plate" minlength="7" maxlength="7" placeholder="{{ __('Placa') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">{{ __('Cadastrar') }}</button>
                
                <hr>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</form>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

@endsection