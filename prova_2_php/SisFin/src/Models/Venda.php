<?php

namespace Sisfin\Models;

use \DateTime;
use Sisfin\Util\TipoPessoa;
use Sisfin\Util;

class Venda
{
    private int $_id;
    private Cliente $_cliente;
    private DateTime $_instante;
    private string $_descricao;
    private float $_desconto;
    private float $_valorTotal;
    private ItemVenda $_itensVenda;

     public function __construct(int $_id, DateTime $_instante, string $_descricao, float $_desconto, float $_valorTotal,Cliente $_cliente)
    {
        $this->_id = $_id;
        $this->_cliente = $_cliente;
        $this->_instante = $_instante;
        $this->_descricao = $_descricao;
        $this->_desconto = $_desconto;
        $this->_valorTotal = $_valorTotal;
        $this->_itensVenda = array();
    }


    public function getId(): int
    {
        return $this->_id;
    }

    public function setId(int $id): Venda
    {
        $this->_id = $id;
        return $this;
    }

    public function getCliente(): Cliente
    {
        return $this->_cliente;
    }

    public function setCliente(Cliente $cliente): Venda
    {
        $this->_cliente = $cliente;
        return $this;
    }

    public function getInstante(): DateTime
    {
        return $this->_instante;
    }

    public function setInstante(DateTime $instante): Venda
    {
        $this->_instante = $instante;
        return $this;
    }

    public function getDescricao(): string
    {
        return $this->_descricao;
    }

    public function setDescricao(string $descricao): Venda
    {
        $this->_descricao = $descricao;
        return $this;
    }

    public function getDesconto(): float
    {
        return $this->_desconto;
    }

    public function setDesconto(float $desconto): Venda
    {
        $this->_desconto = $desconto;
        return $this;
    }

    public function getValorTotal(): float
    {
        return $this->_valorTotal;
    }

    public function setValorTotal(float $valorTotal): Venda
    {
        $this->_valorTotal = $valorTotal;
        return $this;
    }

}