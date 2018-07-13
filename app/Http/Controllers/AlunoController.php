<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function getAlunos(){
        $alunos = Aluno::all();
        return view('aluno/list', compact('alunos'));
    }

    public function store(Request $request){
        /*$insert = Aluno::insert([
            'tx_nome' => 'Clebinho',
            'tx_sobrenome' => 'Carvalho',
            'tx_curso' => 'Marketing',
            'nu_semestre' => 2
        ]);
        if($insert){
            return "<alert>Inserido com sucesso</alert>";
        } else {
            return "<alert>Não inserido</alert>";
        }*/
        Aluno::create($request->input());
        return view('aluno.list')."<script>alert('Salvo com sucesso!')</script>";
    }

    public function delete($id){
        $delete = Aluno::where('id_aluno', $id)->delete();
        if($delete){
            return "<h1>$delete</h1>";
        } else {
            return "<h1>Deu não</h1>";
        }
    }

    public function form($id = null){
        if($id != null){
            $aluno = Aluno::where('id_aluno', $id)->get();
            return $aluno;
          return view('aluno.form', $aluno);
        } else {
            return view('aluno.form');
        }
    }
}
