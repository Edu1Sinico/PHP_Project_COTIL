<?php

namespace Sisfin\Models;

use Sisfin\Util\TipoPessoa;

class Fornecedor
{
    private int $_id;
    private TipoPessoa $_tipoPessoa;
    private string $_nome;
    private string $_email;

    /**
     * @param int $_id
     * @param TipoPessoa $_tipoPessoa
     * @param string $_nome
     * @param string $_email
     */
    public function __construct(int $_id, TipoPessoa $_tipoPessoa, string $_nome, string $_email)
    {
        $this->_id = $_id;
        $this->_tipoPessoa = $_tipoPessoa;
        $this->_nome = $_nome;
        $this->_email = $_email;
    }

    public function getId(): int
    {
        return $this->_id;
    }

    public function setId(int $id): Fornecedor
    {
        $this->_id = $id;
        return $this;
    }

    public function getTipoPessoa(): TipoPessoa
    {
        return $this->_tipoPessoa;
    }

    public function setTipoPessoa(TipoPessoa $tipoPessoa): Fornecedor
    {
        $this->_tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getNome(): string
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Fornecedor
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->_email;
    }

    public function setEmail(string $email): Fornecedor
    {
        $this->_email = $email;
        return $this;
    }
}