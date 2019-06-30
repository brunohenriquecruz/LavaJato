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
                    <input type="text" class="form-control form-control-user" id="model" name="model" placeholder="{{ __('Modelo') }}" required>
                  </div>
                  <div class="col-sm-6">
                    <p></p>
                    <input type="text" class="form-control form-control-user" id="color" name="color" placeholder="{{ __('Cor') }}" required>
                  </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="plate" name="plate" minlength="7" maxlength="7" placeholder="{{ __('Placa') }}" required>
                </div>
                <div class="form-group">
                <select class="form-control" name="id_client" id="id_client" required>
                  <option value="" disabled selected>Selecione o cliente</option>
                  @foreach($client as $clients)
                  <option value="{{$clients->id}}">{{$clients->name}} CPF: {{$clients->cpf}}</option>
                  @endforeach
                </select>
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