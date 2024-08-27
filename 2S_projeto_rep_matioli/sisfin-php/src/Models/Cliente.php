<?php

namespace Sisfin\Models;

use MongoDB\Driver\ClientEncryption;
use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;
use \PDO;


class Cliente
{
    private int|null $_id;
    private int|null $_tipoPessoa;
    private string|null $_nome;
    private string|null $_email;

    public function __construct(int $id = 0){
        $this->_id = $id;
        $this->_nome="";
        $this->_tipoPessoa=0;
        $this->_email="";
    }

    public function getTipoPessoa()
    {
        return $this->_tipoPessoa;
    }

    public function setTipoPessoa(?int $tipoPessoa): Cliente
    {
        $this->_tipoPessoa = $tipoPessoa;
        return $this;
    }
    public function getId()
    {
        return $this->_id;
    }

    public function setId(?int $id): Cliente
    {
        $this->_id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Cliente
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail(?string $email): Cliente
    {
        $this->_email = $email;
        return $this;
    }
}