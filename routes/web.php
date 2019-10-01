<?php


Route::get('/', ['uses'=>'UserController@getClient'])->name('home'); 
Route::get('/usuario/cadastro', ['uses'=>'UserController@getClientRegister'])->name('registerClient');
Route::post('/usuario/cadastro', ['uses'=>'UserController@postClient'])->name('postClient');
Route::get('usuario/editar/{id}', ['uses'=>'UserController@getClientRegister'])->name('editClient');
Route::get('usuario/deletar/{id}', ['uses'=>'UserController@deleteClient'])->name('deliteClient');