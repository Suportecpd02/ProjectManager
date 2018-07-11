<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listagem(){
        return view('aluno/list');
    }
}
