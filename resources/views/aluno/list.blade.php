<!doctype html>
<html lang="{{ app()->getLocale() }}">
@extends('import')
@section('conteudo')
    <body>
    <div class="card container-fluid">
        <div class="col s12">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="row">
                <div class="col s12 center">
                    <span class="card-title">Listagem de Alunos</span>
                </div>
                <a class="waves-effect waves-light btn" href="{{ route('aluno.form') }}">Add</a>
            </div>
            <div class="row">
                <div class="col s12">
                    <table id="tabela" class="highlight">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Curso</th>
                            <th>Semestre</th>
                            <th colspan="2">Ações</th>
                        </tr>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->id_aluno}}</td>
                                <td>{{$aluno->tx_nome}}</td>
                                <td>{{$aluno->tx_sobrenome}}</td>
                                <td>{{$aluno->tx_curso}}</td>
                                <td>{{$aluno->nu_semestre}}</td>
                                <td><a href="{{route('aluno.form', $aluno->id_aluno)}}"><i class="material-icons">edit</i></a></td>
                                <td><a href="{{route('aluno.delete', $aluno->id_aluno)}}"><i class="material-icons">delete</i></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
@endsection
