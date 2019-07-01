@extends('layouts.app')

@section('content')
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
            <div class="col-lg-6 d-none d-lg-block">
              <img style="height: 100%; width: 114%;" src="{{ asset('img/bg1.JPG') }}" alt="">
            </div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-2">{{ __('Cadastro de Serviços') }}</h1>
                  <p></p>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-6">
                    <p></p>
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="{{ __('Serviço') }}" required>
                  </div>
                  <div class="col-sm-6">
                    <p></p>
                    <input type="text" class="form-control form-control-user" id="price" name="price" placeholder="{{ __('Valor') }}" required>
                  </div>
                </div>
                  <div class="form-group">
                    <select class="custom-select">
                          <option disabled selected>Serviços já cadastrados</option>
                          @foreach($service as $services)
                          <option value="{{$services->id}}">{{$services->name}}</option>
                          @endforeach
                          
                    </select>
                    <!-- <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."> -->
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">{{ __('Cadastrar') }}</button>
                  </a>
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