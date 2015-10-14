<?php
/**
 * Created by PhpStorm.
 * User: jis
 * Date: 07/10/2015
 * Time: 17:13
 */

namespace SON\Banco;

use SON\Conta\Types\ContaType;

class Santander
{
    private $nome;

    public function __construct()
    {
        $conta = new ContaType();
    }
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


}