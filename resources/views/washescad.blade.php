@extends('layouts.app')

@section('content')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<body class="bg-gradient-primary">
<form method="POST" action="">
@csrf
    <div class="container">

    <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img style="height: 100%; width: 114%;" src="{{ asset('img/b1.JPG') }}" alt="">
                            </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">{{ __('Cadastro de Lavegem') }}</h1>
                                        </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <select class="form-control" name="id_cc" id="id_cc">
                                                <option value="" disabled selected>Selecione o cliente</option>
                                                @foreach ($client as $clients)
                                                <option value="{{$clients->cli_id}}|{{$clients->car_id}}">{{$clients->name}} - Carro: {{$clients->model}} - CPF: {{$clients->cpf}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control " name="id_service" id="id_service">
                                                <option value="" disabled selected>Selecione o serviço</option>
                                                @foreach ($service as $services)
                                                <option value="{{$services->id}}">{{$services->name}} - Valor: {{$services->price}}</option>
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

        </div>

    </div>

</form>
</body>

@endsection