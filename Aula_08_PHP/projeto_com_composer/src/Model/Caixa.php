<?php

namespace projeto\prj_composer;

class Caixa{
    private int $id;
    private string $nome;
    public function __construct(int $id, string $nome){
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getnome()
    {
        return $this->nome;
    }
    public function setnome(string $nome)
    {
        $this->nome = $nome;
    }
}