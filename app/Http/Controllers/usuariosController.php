<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
   
    public function index()
    {
      //Apresentar o formulario
      return view('novo-usuario');
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
        return 'cheguei';
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
