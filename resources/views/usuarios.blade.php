@extends('layouts.default')

@push('styles')

@endpush

@push('scripts')
<script src="{{ asset('js/client/listClient.js') }}" type="text/javascript"></script>
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="p-3">
          <div class="p-3">
            <div class="row">
              <div class="col-6">
                <h2><b>Lista de Usuarios:</b></h2> 
              </div>
              <div class="col-6 justify-content-end">
                  <a href="{{ route('registerClient') }}" class="btn btn-dark float-right">Adicionar</a>
              </div>
            </div>
          </div>
            <table id="listPerson" class="table table-striped table-bordered nowrap" style="widht:100%">
                <thead  class="thead-dark">
                    <tr>
                        <th>Id:</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>CEP</th>
                        <th>Endereco</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th width='100px'>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                      <tr>
                       <th scope="row">{{ $cliente->id }}</th>
                       <td>{{ $cliente->name }}</td>
                       <td>{{ $cliente->birthdate }}</td>
                       <td> @if($cliente->genre == 1) M @else F @endif </td>
                       <td>{{ $cliente->postal_cold }}</td>
                       <td>{{ $cliente->addres }}</td>
                       <td>{{ $cliente->number }}</td>
                       <td>{{ $cliente->complement }}</td>
                       <td>{{ $cliente->neighborhood }}</td>
                       <td>{{ $cliente->city }}</td>
                       <td>{{ $cliente->state }}</td> 
                       <td>
                          <button  class="btn btn-danger  btn-sm modal-delete" data-toggle="modal" data-id="{{$cliente->id}}" data-target="#pergunta">
                              <i class="fa fa-trash"></i>
                          </button>
                       <a href="{{route('editClient', $cliente->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i></a>
                      </td>
                      </tr>
                    @endforeach
                  </tbody>                
                </table>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="pergunta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja Remover o cliente?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary delete">Sim</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
      </div>
    </div>
  </div>
</div>
@endsection
