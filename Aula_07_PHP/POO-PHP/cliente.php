<?php


class cliente
{
    private int $id;
    private String $cpf_cnpj;
    private int $razaoSocial;
    private dateTime $dataNascimento;
    private String $nome;
    private String $rua;
    private int $numero;
    private String $bairro;
    private String $cidade;
    private String $complemento;
    private String $cep;
    private String $telefone;
    private String $email;
    private String $celular;
    private float $limite;

    public function __construct(int $id, String $cpf_cnpj, int $razaoSocial, dateTime $dataNascimento, String $nome, String $rua, int $numero, String $bairro, String $cidade, String $complemento, String $cep, String $telefone, String $email, String $celular, float $limite)
    {
        $this->id = $id;
        $this->cpf_cnpj = $cpf_cnpj;
        $this->razaoSocial = $razaoSocial;
        $this->dataNascimento = $dataNascimento;
        $this->nome = $nome;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->complemento = $complemento;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->celular = $celular;
        $this->limite = $limite;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getCpf_cnpj()
    {
        return $this->id;
    }

    public function setCpf_cnpj(String $cpf_cnpj)
    {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(int $razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(dateTime $dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(String $nome)
    {
        $this->nome = $nome;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua(String $rua)
    {
        $this->rua = $rua;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone(String $telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade(String $cidade)
    {
        $this->cidade = $cidade;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setComplemento(String $complemento)
    {
        $this->complemento = $complemento;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro(String $bairro)
    {
        $this->bairro = $bairro;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep(String $cep)
    {
        $this->cep = $cep;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero(String $numero)
    {
        $this->numero = $numero;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular(String $celular)
    {
        $this->celular = $celular;
    }

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite(String $limite)
    {
        $this->limite = $limite;
    }
}
