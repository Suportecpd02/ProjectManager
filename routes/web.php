<?php

Route::group(['prefix' => 'aluno'], function (){
   /*Route::get('/list', function (){
       return view('aluno/list');
   })->name('aluno.list');*/
   Route::get('/list', 'AlunoController@getAlunos')->name('aluno.list');
   Route::get('/form/{id?}', 'AlunoController@form')->name('aluno.form');
   Route::post('/store', 'AlunoController@store')->name('aluno.store');
   Route::get('/edit/{id}', 'AlunoController@edit')->name('aluno.edit');
   Route::get('/delete/{id}', 'AlunoController@delete')->name('aluno.delete');
});

Route::get('/', function () {
    return view('welcome');
});
