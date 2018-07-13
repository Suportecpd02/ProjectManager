<!doctype html>
<html lang="{{ app()->getLocale() }}">
@extends('import')
@section('conteudo')
    <div class="card container-fluid">
        <form name="form" method="post" action="{{route('aluno.store')}}">
            <div class="col s12">
                <div class="modal-content" style="height: auto">
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col s4">
                            <h5>Cadastro de Aluno</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="input-field col s4">
                            <input id="tx_nome" type="text" class="" name="tx_nome" maxlength="60" required value="" >
                            <label for="tx_nome" class="active">Nome</label>
                        </div>
                        <div class="input-field col s5">
                            <input id="tx_sobrenome" type="text" class="" maxlength="60" name="tx_sobrenome" required value="">
                            <label for="tx_sobrenome" class="active">Sobrenome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 browser-default">
                            <select class="browser-default" name="tx_curso">
                                <option value="" disabled selected>Curso</option>
                                <option value="ads">ADS</option>
                                <option value="redes">Redes</option>
                                <option value="cienciacomput">Ciência da Computação</option>
                            </select>
                        </div>
                        <div class="input-field col s2">
                            <input id="nu_semestre" type="number" class="" maxlength="60" required name="nu_semestre" value="">
                            <label for="nu_semestre" class="active">Semestre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l12" align="right">
                            <a id="botaoVoltar" class="btn grey waves-effect waves-light" href="<?php  route('aluno.list') ?>">Voltar
                            </a>
                            <button id="botaoSalvar" type="submit" class="btn green waves-effect waves-light">Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        /*document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });*/
    </script>
@endsection