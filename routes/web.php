<?php


Route::get('/', ['uses'=>'UserController@listAll'])->name('home'); 
Route::view('/novo-usuario', 'novo-usuario')->name('novo-usuario');

Route::post('/novo-usuario', ['uses'=>'UserController@save'])->name('novo-usuario');