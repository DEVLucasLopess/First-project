<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\DB;
     class UserController extends Controller
     {
        
            public function listAll()
            {
                $mysql = "mysql";
                DB::connection($mysql)->select ("SELECT * FROM mydb.person");
                $clientes = []; 
                $clientes[0] = ['id'=> '1', 'nome' => 'mineiro', 'idade'=> '23', 'sexo' => 'masculino', 'endereco' => 'Rua Jagnada', 'numero' => '265', 'complemento' => 'zona 07', 'bairro' => 'zona 07', 'estado' => 'Parana', 'cidade' => 'Maringa' ];
                $clientes[1] = ['id'=> '2', 'nome' => 'lucas', 'idade'=> '25', 'sexo' => 'masculino', 'endereco' => 'Rua Jagnada', 'numero' => '265', 'complemento' => 'zona 08', 'bairro' => 'Sarandi', 'estado' => 'Parana', 'cidade' => 'Maringa'];
                return view('usuarios', ['clientes' => $clientes]);
            }

            public function SendData(Request $request){

            $result=DB::insert("insert into test (id, birthdate, name, genre) values (?,?,?)", ['1','04.11.1994', 'nome', 'genre']);
            return view($result);

          }
            public function  save(Request $request){

                $this->validate($request,[

                    'age' => 'required|gte:18|min:1|max:999|numeric',
                    'genre' => 'required|in:Masculino, Feminino',
                    'name' => 'required',
                    'address' => 'required',
                    'number' => 'required',
                    'complement' => 'required',
                    'neighborhood' => 'required',
                    'state' => 'required',
                    'city' => 'required',
                    ]);

                    $name = $request->input('name');
                    $age = $request->input('age');
                    $genre = $request->input('genre');
                    $address = $request->input('address');
                    $number = $request->input('number');
                    $complement = $request->input('complement');
                    $neighborhood = $request->input('neighborhood');
                    $state = $request->input('state');
                    $city = $request->input('city');

                    echo "genero: $genre <br>";
                    echo "endereço: $address <br>";
                    echo "numero: $number <br>";
                    echo "complemento: $complement <br>";
                    echo "bairro: $neighborhood <br>";
                    echo "estado: $state <br>";
                    echo "cidade: $city <br>";
            
                }
        }
?>