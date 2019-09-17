<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Estilo -->
        <link href="css/app.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    </head>
    <html>
      <body>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id:</th>
      <th scope="col">Nome:</th>
      <th scope="col">Idade:</th>
      <th scope="col">sexo:</th>
      <th scope="col">endereco:</th>
      <th scope="col">numero:</th>
      <th scope="col">complemento:</th>
      <th scope="col">bairro:</th>
      <th scope="col">estado:</th>
      <th scope="col">cidade:</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
      <tr>
       <th scope="row">{{ $cliente['id'] }}</th>
       <td>{{ $cliente['nome'] }}</td>
       <td>{{ $cliente['idade'] }}</td>
       <td>{{ $cliente['sexo'] }}</td>
       <td>{{ $cliente['endereco'] }}</td>
       <td>{{ $cliente['numero'] }}</td>
       <td>{{ $cliente['complemento'] }}</td>
       <td>{{ $cliente['bairro'] }}</td>
       <td>{{ $cliente['estado'] }}</td>
       <td>{{ $cliente['cidade'] }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
        <tr>
            <td>
              <a href="{{ URL::route('novo-usuario') }}"><button type="submit" class="btn btn-dark">Adicionar</button></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href=""><button type="submit" class="btn btn-dark">Remover</button></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href=""><button type="submit" class="btn btn-dark">Editar</button></a>
            </td>
        </tr>
    </html>