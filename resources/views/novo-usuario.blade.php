@extends('layouts.default')

@push('styles')
<link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/validate.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/client/newClient.js') }}" type="text/javascript"></script>
@endpush

@section('content')
<div class="p-3 mb-2 bg-dark text-white"><h2>Favor informar os dados do novo cliente:</h2></div>
      <div class="menucentralizado">          
          <form action="{{route('postClient')}}" id="formClient" autocomplete="off" method="POST">
            @csrf <!-- Modo de segurança do Laravel -->
            @if ($client && $client->id)
              <input type="hidden" name="idClient" value="{{ $client->id }}">
            @endif
            <div class="p-3">
              <div class="row">
                <div class="col-12">
                  <h4>Dados do Cliente</h4>
                </div>
              </div>
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
              <div class="form-row">
                  <div class="col-xl-6 col-sm-12 mb-3">
                      <label for="name">Nome</label>
                      <input type="text" name="name" class="form-control" autocomplete="off" value="{{ $client->name ?? null }}">
                  </div>
                  <div class="col-xl-4 col-sm-12 mb-3">
                      <label for="birht">Data de Nascimento</label>
                      <div class="input-group date" data-provide="datepicker">
                          <input type="text"  name="birth" class="form-control" value="{{ $client->birthdate ?? null }}">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-sm-12 mb-3">
                      <label class="col-12">Sexo</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="garnder" id="garnder1" value="1" @if($client && ($client->genre == 1)) checked @endif>
                          <label class="form-check-label" for="garnder1">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="garnder" id="garnder2" value="2" @if($client && ($client->genre == 2)) checked @endif>
                          <label class="form-check-label" for="garnder2">Feminino</label>
                        </div>                       
                  </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-12">
                    <h4>Endereço</h4>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-4 col-sm-12 mb-3">
                        <label for="zipcode">CEP</label>
                        <input type="text" id="zipcode" name="zipcode" class="cep form-control" autocomplete="off"  value="{{ $client->postal_cold ?? null }}">
                    </div>
                    <div class="col-xl-4 col-sm-12 mb-3">
                        <label for="address">Endereço</label>
                        <input type="text" name="address" class="form-control" autocomplete="off"  value="{{ $client->addres ?? null }}">
                    </div>
                    <div class="col-xl-4 col-sm-12 mb-3">
                        <label class="col-12" for="number">Numero</label>
                        <input type="text" name="number" class="form-control" autocomplete="off"  value="{{ $client->number ?? null }}">                     
                    </div>
                    <div class="col-xl-4 col-sm-12 mb-3">
                        <label for="complement">Complemento</label>
                        <input type="text" name="complement" class="form-control" autocomplete="off"  value="{{ $client->complement ?? null }}">
                    </div>
                    <div class="col-xl-4 col-sm-12 mb-3">
                        <label for="neighborhood">Bairro</label>
                        <input type="text" name="neighborhood" class="form-control" autocomplete="off"  value="{{ $client->neighborhood ?? null }}">
                    </div>
                    <div class="col-xl-4 col-sm-12 mb-3">
                        <label class="col-12" for="state">Estado</label>
                        <input type="text" name="state" class="form-control" autocomplete="off"  value="{{ $client->state ?? null }}" >                     
                    </div>
                    <div class="col-xl-4 col-sm-12 mb-3">
                        <label class="col-12" for="city">Cidade</label>
                        <input type="text" name="city" class="form-control" autocomplete="off"  value="{{ $client->city ?? null }}">                     
                    </div>
                </div>
                <div class="row">
                  <div class="col-12"> 
                    <div class="float-right">
                      <a class="btn btn-primary" href="{{route('home')}}" style="color:inherit; text-decoration: none;">Voltar</a>
                      <button type="submit" class="btn btn-dark" data-submit>Salvar</button>
                    </div>
                    </div> 
                </div>
            </div>                          
          </form>
      </div>
@endsection