<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvedor 2
 * Date: 10/07/2018
 * Time: 14:12
 */

namespace App;


class AlunoProjeto
{
    protected $table = "tb_aluno_projeto";
    protected $primaryKey = "fk_aluno";
    protected $fillable = ["fk_aluno", "fk_projeto"];
    public $timestamps = true;
}