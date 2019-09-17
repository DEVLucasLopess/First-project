<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Novo usuario</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
      <body>
        <div id="teste">  
      <div class="p-3 mb-2 bg-dark text-white"><h2>Favor informar os dados do novo cliente:</h2></div>
      <div class="menucentralizado">
          @if(count($errors) !=0)
                @foreach ($errors->all() as $erro)
                  <p class="alert alert-danger"> {{$erro}} </p>   
                @endforeach
          @endif
                      <form action="/novo-usuario" method="POST">
                        @csrf <!-- Modo de segurança do Laravel -->
                              <input class="field" name="name" type="text" placeholder="Nome:" required><br><br>
                              <input class="field" name="age" type="text" placeholder="Idade:" required><br><br>  
                              <select class="field" type="select" name ="sex" required><br><br>
                                  <option>Masculino</option>
                                  <option>Feminino</option>
                              </select><br><br>
                              <input class="field" name="address" type="text" placeholder="endereco:" required><br><br>
                              <input class="field" name="number" type="text" placeholder="numero:" required><br><br>
                              <input class="field" name="complement" type="text" placeholder="complemento:" required><br><br>
                              <input class="field" name="neighborhood" type="text" placeholder="bairro:" required><br><br>
                              <input class="field" name="state" type="text" placeholder="estado:" required><br><br>
                              <input class="field" name="city" type="text" placeholder="cidade:" required><br><br>
                              <button type="submit" class="btn btn-dark">Salvar</button>
                              <button type="button" class="btn btn-dark"><a href="/" style="color:inherit; text-decoration: none;">Voltar</a></button>
                      </form>
                </div>
      </div>
  </body>
</html>