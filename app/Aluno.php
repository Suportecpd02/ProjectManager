<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvedor 2
 * Date: 10/07/2018
 * Time: 14:05
 */

namespace App;


class Aluno
{
    protected $table = "tb_aluno";
    protected $primaryKey = "id_aluno";
    protected $fillable = ["tx_nome", "tx_sobrenome", "tx_curso", "nu_semestre",];
    public $timestamps = true;
}