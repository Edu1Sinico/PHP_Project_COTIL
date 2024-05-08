<?php

namespace Sisfin\Models;

use Sisfin\Util\TipoPessoa;

 class Cliente
{
    private ?int $_id;
    private TipoPessoa $_tipoPessoa;
    private string $_nome;
    private string $_email;

     public function __construct(?int $_id, TipoPessoa $_tipoPessoa, string $_nome, string $_email)
    {
        $this->_id = $_id;
        $this->_tipoPessoa=$_tipoPessoa;
        $this->_nome = $_nome;
        $this->_email = $_email;
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

     public function getTipoPessoa(): TipoPessoa
     {
         return $this->_tipoPessoa;
     }

     public function setTipoPessoa(TipoPessoa $tipoPessoa): void
     {
         $this->_tipoPessoa = $tipoPessoa;
     }

     public function getNome(): string
     {
         return $this->_nome;
     }

     public function setNome(string $nome): void
     {
         $this->_nome = $nome;
     }

     public function getEmail(): string
     {
         return $this->_email;
     }

     public function setEmail(string $email): void
     {
         $this->_email = $email;
     }

}