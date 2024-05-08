<?php

namespace Sisfin\Models;
use Sisfin\Models\Fornecedor;
use Sisfin\Util\TipoPessoa;

class Produto
{
    private ?int $_id;
    private Fornecedor $_fornecedor;
    private string $_nome;
    private float $_preco;

     public function __construct(?int $_id, Fornecedor $fornecedor, string $_nome, float $_preco)
    {
        $this->_id = $_id;
        $this->_fornecedor = $fornecedor;
        $this->_nome = $_nome;
        $this->_preco = $_preco;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->_id;
    }

    public function setId(int $id): Produto
    {
        $this->_id = $id;
        return $this;
    }

    public function getFornecedor(): Fornecedor
    {
        return $this->_fornecedor;
    }

    public function setFornecedor(Fornecedor $fornecedor): Produto
    {
        $this->_fornecedor = $fornecedor;
        return $this;
    }

    public function getNome(): string
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Produto
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getPreco(): float
    {
        return $this->_preco;
    }

    public function setPreco(float $preco): Produto
    {
        $this->_preco = $preco;
        return $this;
    }
}