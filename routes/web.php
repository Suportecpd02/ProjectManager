<?php

Route::group(['prefix' => 'aluno'], function (){
   Route::get('/salvar', function (){
        return 'Salvando Aluno';
   });
   Route::get('/list', 'AlunoController@listagem')->name('aluno.list');
});

Route::get('/', function () {
    return view('welcome');
});
