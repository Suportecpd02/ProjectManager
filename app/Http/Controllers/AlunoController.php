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
        print_r($request->input());
        $store = Aluno::create($request->input());
        return view('aluno.store', compact('store'));
    }

    public function form($id = null){
        if($id != null){
            $aluno = Aluno::where('id_aluno', $id)->get();
          return view('aluno.form', $aluno);
        } else {
            return view('aluno.form');
        }
    }
}
