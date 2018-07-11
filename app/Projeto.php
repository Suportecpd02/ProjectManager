<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvedor 2
 * Date: 10/07/2018
 * Time: 14:09
 */

namespace App;


class Projeto
{
    protected $table = "tb_projeto";
    protected $primaryKey = "id_projeto";
    protected $fillable = ["dt_prazo", "tx_descricao"];
    public $timestamps = true;
}