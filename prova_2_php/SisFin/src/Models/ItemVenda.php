<?php

namespace Sisfin\Models;

class ItemVenda
{
    private int $_id;
    private Venda $_venda;
    private Produto $_produto;
    private float $_quantidade;
    private float $_desconto;
    private float $_preco;

    public function __construct(int $_id, Venda $_venda, Produto $_produto, float $_quantidade, float $_desconto, float $_preco)
    {
        $this->_id = $_id;
        $this->_venda = $_venda;
        $this->_produto = $_produto;
        $this->_quantidade = $_quantidade;
        $this->_desconto = $_desconto;
        $this->_preco = $_preco;
    }

    public function getId(): int
    {
        return $this->_id;
    }

    public function setId(int $id): ItemVenda
    {
        $this->_id = $id;
        return $this;
    }

    public function getVenda(): Venda
    {
        return $this->_venda;
    }

    public function setVenda(Venda $venda): ItemVenda
    {
        $this->_venda = $venda;
        return $this;
    }

    public function getProduto(): Produto
    {
        return $this->_produto;
    }

    public function setProduto(Produto $produto): ItemVenda
    {
        $this->_produto = $produto;
        return $this;
    }

    public function getQuantidade(): float
    {
        return $this->_quantidade;
    }

    public function setQuantidade(float $quantidade): ItemVenda
    {
        $this->_quantidade = $quantidade;
        return $this;
    }

    public function getDesconto(): float
    {
        return $this->_desconto;
    }

    public function setDesconto(float $desconto): ItemVenda
    {
        $this->_desconto = $desconto;
        return $this;
    }

    public function getPreco(): float
    {
        return $this->_preco;
    }

    public function setPreco(float $preco): ItemVenda
    {
        $this->_preco = $preco;
        return $this;
    }



}