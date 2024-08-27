<?php

namespace Sisfin\Models;

// Importação da classe de conexão com o banco de dados
use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;

use \PDO;

class Fornecedor
{
    private int|null $_id;
    private int|null $_tipoFornecedor;
    private string|null $_cpfCnpj;
    private string|null $_razaoSocial;
    private string|null $_nome;
    private string|null $_rua;
    private int|null $_numero;
    private string|null $_bairro;
    private string|null $_cidade;
    private string|null $_complemento;
    private string|null $_cep;
    private string|null $_telefone;
    private string|null $_celular;
    private string|null $_email;

    public function __construct(int $id = 0){
        $this->_id = $id;
        $this->_tipoFornecedor=0;
        $this->_cpfCnpj = "";
        $this->_razaoSocial = "";
        $this->_nome = "";
        $this->_rua = "";
        $this->_numero = 0;
        $this->_bairro = "";
        $this->_cidade = "";
        $this->_complemento = "";
        $this->_cep = "";
        $this->_telefone = "";
        $this->_celular = "";
        $this->_email = "";
    }

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->_id;
    }

    public function setId(?int $id): Fornecedor
    {
        $this->_id = $id;
        return $this;
    }

    public function getTipoFornecedor()
    {
        return $this->_tipoFornecedor;
    }

    public function setTipoFornecedor(?int $tipoFornecedor): Fornecedor
    {
        $this->_tipoFornecedor = $tipoFornecedor;
        return $this;
    }

    public function getCpfCnpj(): string
    {
        return $this->_cpfCnpj;
    }

    public function setCpfCnpj(string $cpfCnpj): Fornecedor
    {
        $this->_cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->_razaoSocial;
    }

    public function setRazaoSocial(?string $razaoSocial): Fornecedor
    {
        $this->_razaoSocial = $razaoSocial;
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

    public function getRua(): string
    {
        return $this->_rua;
    }

    public function setRua(string $rua): Fornecedor
    {
        $this->_rua = $rua;
        return $this;
    }

    public function getNumero(): int
    {
        return $this->_numero;
    }

    public function setNumero(?int $numero): Fornecedor
    {
        $this->_numero = $numero;
        return $this;
    }

    public function getBairro(): string
    {
        return $this->_bairro;
    }

    public function setBairro(string $bairro): Fornecedor
    {
        $this->_bairro = $bairro;
        return $this;
    }

    public function getCidade(): string
    {
        return $this->_cidade;
    }

    public function setCidade(string $cidade): Fornecedor
    {
        $this->_cidade = $cidade;
        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->_complemento;
    }

    public function setComplemento(?string $complemento): Fornecedor
    {
        $this->_complemento = $complemento;
        return $this;
    }

    public function getCep(): string
    {
        return $this->_cep;
    }

    public function setCep(string $cep): Fornecedor
    {
        $this->_cep = $cep;
        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->_telefone;
    }

    public function setTelefone(?string $telefone): Fornecedor
    {
        $this->_telefone = $telefone;
        return $this;
    }

    public function getCelular(): ?string
    {
        return $this->_celular;
    }

    public function setCelular(?string $celular): Fornecedor
    {
        $this->_celular = $celular;
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

    // método de listagem de fornecedores cadastrados no banco de dados.
    public static function getAll(): array
    {
        try {
            $cn = Connection::make();
            $sql = "SELECT * FROM fornecedor";
            $result = $cn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $ex) {
            return array(null);
        }
    }
}
