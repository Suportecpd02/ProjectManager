<?php

Route::group(['prefix' => 'aluno'], function (){
   Route::get('/list', function (){
       return view('aluno/list');
   })->name('aluno.list');
   Route::get('/form', function (){
       return view('aluno/form');
   })->name('aluno.form');
   Route::post('/salvar', 'AlunoController@salvarAluno')->name('aluno.salvar');
});

Route::get('/', function () {
    return view('welcome');
});
