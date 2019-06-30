<link rel="icon" href="{{ asset('img/favicon.ico') }}" >
@extends('layouts.app')

@push('scripts')
    <script>
        //Input mask
        $(document).ready(function($){
            $('#cpf').mask('000.000.000-00', {reverse: true});
        });
    </script>
@endpush

@section('content')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cadastro de Veículo</title>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

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
                <h1 class="h4 text-gray-900 mb-4">{{ __('Cadastro de Clientes') }}</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  
                  <div class="col-sm-6">
                    <p></p>
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="{{ __('Nome') }}" required>
                  </div>
                  <div class="col-sm-6">
                    <p></p>
                    <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" maxlength="14" placeholder="CPF">
                  </div>
                </div>
                <div class="form-group">
                <label for="birthdate"> Data de Nascimento:</label>
                <input type="date" class="form-control form-control-user" id="birthdate" name="birthdate" placeholder="{{ __('Data de Nascimento') }}" required>
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

</body>

@endsection