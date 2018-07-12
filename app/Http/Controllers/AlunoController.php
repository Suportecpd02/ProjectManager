<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function salvarAluno(Request $request){
        var_dump($request);exit;
        $dados = $request->input();
        Aluno::create($dados);
    }
}
