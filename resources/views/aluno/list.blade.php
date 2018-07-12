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
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Maria</td>
                            <td>José</td>
                            <td>ADS</td>
                            <td>4</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
@stop
