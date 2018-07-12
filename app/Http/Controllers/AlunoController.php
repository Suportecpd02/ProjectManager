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
        return var_dump($request->all());
    }
}
