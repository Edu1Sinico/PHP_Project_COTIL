<?php

namespace projeto\prj_composer;

class ContaPagar{
    private int $id;
    private float $valor;
    private \dateTime $dataVencimento;
    private \dateTime $dataPagamento;
    private int $meioPagamento;
    private int $situacao;

    public function __construct(int $id, float $valor, \dateTime $dataVencimento, \dateTime $dataPagamento, int $meioPagamento, int $situacao){
        $this->id = $id;
        $this->valor = $valor;
        $this->dataVencimento = $dataVencimento;
        $this->dataPagamento = $dataPagamento;
        $this->meioPagamento = $meioPagamento;
        $this->situacao = $situacao;
    }

    public function getId(){
        return $this->id;
    }
    public function getValor(){
        return $this->valor;
    }
    public function getDataVencimento(){
        return $this->dataVencimento;
    }
    public function getDataPagamento(){
        return $this->dataPagamento;
    }
    public function getMeioPagamento(){
        return $this->meioPagamento;
    }
    public function getsituacao(){
        return $this->situacao;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function setValor(float $valor){
        $this->valor = $valor;
    }
    public function setDataVencimento($dataVencimento){
        $this->dataVencimento = $dataVencimento;
    }
    public function setDataPagamento($dataPagamento){
        $this->dataPagamento = $dataPagamento;
    }
    public function setMeioPagamento($meioPagamento){
        $this->meioPagamento = $meioPagamento;
    }
    public function setsituacao(string $situacao){
        $this->situacao = $situacao;
    }

}