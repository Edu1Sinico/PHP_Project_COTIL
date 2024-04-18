<?php

namespace projeto\prj_composer;
use prj_composer\Util\TipoConta;


class Conta{
    private int $id;
    private String $descricao;
    private int $tipoConta;
    private bool $status;

    public function __construct(int $id, String $descricao, int $tipoConta, bool $status){
        $this->id = $id;
        $this->descricao = $descricao;
        $this->tipoConta = $tipoConta;
        $this->status = $status;
    }

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function getDescricao(): String{
        return $this->descricao;
    }
    public function setDescricao(String $descricao){
        $this->descricao = $descricao;
    }
    public function getTipoConta(): int{
        return $this->tipoConta;
    }
    public function setTipoConta(int $tipoConta){
        $this->tipoConta = $tipoConta;
    }
    public function getStatus(): bool{
        return $this->status;
    }
    public function setStatus(bool $status){
        $this->status = $status;
    }
}