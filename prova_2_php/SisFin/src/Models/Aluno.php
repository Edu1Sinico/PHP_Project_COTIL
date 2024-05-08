<?php

namespace Sisfin\Models;

class Aluno
{
    private ?int $_id;
    private String $_ra;
    private String $_nome;
    private String $_turma;

    public function __construct(?int $_id,String $_ra, String $_turma, String $_nome)
    {
        $this->_id = $_id;
        $this->_ra = $_ra;
        $this->_turma = $_turma;
        $this->_nome = $_nome;
        return $this;
    }

    public function getId(): ?int
     {
         return $this->_id;
     }

     public function setId(?int $id): void
     {
         $this->_id = $id;
     }

    public function getRa(): String
    {
        return $this->_ra;
    }

    public function setRa(String $_ra): void
    {
        $this->_ra = $_ra;
    }

    public function getNome(): String
    {
        return $this->_nome;
    }

    public function setNome(String $_nome): void
    {
        $this->_nome = $_nome;
    }

    public function getTurma(): String
    {
        return $this->_turma;
    }

    public function setTurma(String $_turma): void
    {
        $this->_turma = $_turma;
    }
}
