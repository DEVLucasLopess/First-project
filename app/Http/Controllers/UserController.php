<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Validation\Validator;

     class UserController extends Controller
     {
        
            public function listAll()
            {
            $clientes = []; 
            $clientes[0] = ['id'=> '1', 'nome' => 'mineiro', 'idade'=> '23', 'sexo' => 'masculino', 'endereco' => 'Rua Jagnada', 'numero' => '265', 'complemento' => 'zona 07', 'bairro' => 'zona 07', 'estado' => 'Parana', 'cidade' => 'Maringa' ];
            $clientes[1] = ['id'=> '2', 'nome' => 'lucas', 'idade'=> '25', 'sexo' => 'masculino', 'endereco' => 'Rua Jagnada', 'numero' => '265', 'complemento' => 'zona 08', 'bairro' => 'Sarandi', 'estado' => 'Parana', 'cidade' => 'Maringa'];
            return view('usuarios', ['clientes' => $clientes]);
            }



        public function save(Request $request){

            $this->validate($request,[

                'age' => 'required|gte:18|min:1|max:999|numeric',
                'sex' => 'required|in:Masculino, Feminino',
                'name' => 'required',
                'address' => 'required',
                'number' => 'required',
                'complement' => 'required',
                'neighborhood' => 'required',
                'state' => 'required',
                'city' => 'required',
                ]);

        return 'Cadastrado com sucesso!';

            }
    }
?>