<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;
use Validator;
use Date;

class UserController extends Controller
{
    private $client;

    public function __construct(Clients $client, User $user){
        $this->client = $client;
        $this->user = $user;
    }
        
    public function getClient(Request $request)
    {               
            $clientes = $this->client->getClients(); 
            return view('usuarios')
            ->with('clientes', $clientes);
    }

    public function deleteClient(Request $request)
    {
      $id = $request->segments()[2];
      if($this->client->deleteClient($id)){
        return redirect()->route('home');
      }
    }

         
          public function getClientRegister(Request $request, $id = null){
            $client = null;
            if($id) {
              $client  = $this->client->getClient($id);
            }
             return view('novo-usuario')
              ->with('client', $client);

          }

          public function postClient(Request $request){
                $rules = [
                        'name' => 'required',
                        'birth' => 'required|date|before:2002-01-01|after:1910-01-01',
                        'garnder' => 'required|integer|in:1,2',
                        'zipcode' => 'required',
                        'address' => 'required',
                        'number' => 'required|integer',
                        'neighborhood' => 'required',
                        'state' => 'required',
                        'city' => 'required',                        
                ];

                $validator = Validator::make($request->all(), $rules);
                if($validator->fails()){
                    return redirect()->back()
                          ->withInput()
                          ->withErrors($validator);
                }

               $dataClient = [                  
                    'name' => $request->get('name'),
                    'birthdate' => $request->get('birth'),
                    'genre' => $request->get('garnder'),
                    'postal_cold' => preg_replace("/[^0-9]/", "", $request->get('zipcode')), // filtro - remover mascara
                    'addres' => $request->get('address'),
                    'number' => $request->get('number'),
                    'neighborhood'=> $request->get('neighborhood'), 
                    'complement'=> $request->get('complement'),
                    'city'=> $request->get('city'),
                    'state'=> $request->get('state'),
                ];
                 
                
                if($request->get('idClient')){
                   $dataClient = Arr::add($dataClient, 'id', $request->get('idClient'));
                    if($this->client->updateClient($request->get('idClient'), $dataClient)){
                      return redirect()->route('home');
                    }
                }

                if($request->get('idClient') == null){
                  if($this->client->create($dataClient)){
                  return redirect()->route('home');
                  }  
                }


                return redirect()->route('home');

                           

          }
         
        }
