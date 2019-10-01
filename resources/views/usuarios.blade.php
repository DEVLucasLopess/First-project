@extends('layouts.default')

@push('styles')

@endpush

@push('scripts')

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
                        <th>Ações</th>
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
                       <a href="{{route('deliteClient', $cliente->id)}}" class="btn btn-danger btn-sm">Remover</a> 
                       <a href="{{route('editClient', $cliente->id)}}" class="btn btn-primary btn-sm">Editar</a>
                      </td>
                      </tr>
                    @endforeach
                  </tbody>                
                </table>
            </table>
        </div>
    </div>
</div>
@endsection
