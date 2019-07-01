@extends('layouts.app')

@section('content')

<div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Dados completos</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="">
                  <div class="">                    
                    <table id="table" class="col-md-12 table table-striped table-bordered">
                        <thead>                        
                            <tr>
                              <th>Nome</th>
                              <th>CPF</th>
                              <th>Modelo</th>
                              <th>Placa</th>
                              <th>Cor</th>
                              <th>Serviço</th>
                              <th>Valor</th>
                              <th>Data Serviço</th>
                              <th>Ações</th>
                          </tr>
                        </thead>
                        @foreach($query as $dt)
                        <tbody>
                          <tr>
                            <td>{{$dt->cliente}}</td>
                            <td>{{$dt->cpf}}</td>
                            <td>{{$dt->carro}}</td>
                            <td>{{$dt->placa}}</td>
                            <td>{{$dt->cor}}</td>
                            <td>{{$dt->servico}}</td>
                            <td>{{$dt->valor}}</td>
                            <td>{{date('d/m/Y', strtotime($dt->data))}}</td>
                            <td><a href="{{ url('home') }}"><button class="btn btn-primary">Voltar</button></a></td>
                            
                          </tr>
                          @endforeach
                          
                        </tbody>
                    </table>
                      
                  </div>
                </div>
              </div>
            </div>


@endsection