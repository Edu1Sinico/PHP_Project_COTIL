<?php

namespace Sisfin\Models;

class FornecedorValidator
{
    private $_errors;

    public function __construct()
    {
        $this->_errors = [];
    }

    public function getErrors(): array
    {
        return $this->_errors;
    }

    public function addError($campo, $error): void
    {
        $this->_errors[$campo] = $error;
    }

    public function Validate(Fornecedor $fornecedor): bool
    {
        $result = true;

        // Validação do Nome
        if (empty($fornecedor->getNome())) {
            $this->addError('nome', 'Campo NOME não pode ser vazio!');
            $result = false;
        } elseif (strlen($fornecedor->getNome()) < 5) {
            $this->addError('nome', 'Campo NOME deve possuir pelo menos 5 caracteres!');
            $result = false;
        }

        // Validação do Tipo de Fornecedor
        if (empty($fornecedor->getTipoFornecedor())) {
            $this->addError('tipofornecedor', 'Campo TIPO FORNECEDOR não pode ser vazio!');
            $result = false;
        }

        // Validação do Email
        if (empty($fornecedor->getEmail())) {
            $this->addError('email', 'Campo EMAIL não pode ser vazio!');
            $result = false;
        } elseif (!filter_var($fornecedor->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', 'Campo EMAIL deve ser um email válido!');
            $result = false;
        }

        // Validação do CPF/CNPJ
        if (empty($fornecedor->getCpfCnpj())) {
            $this->addError('cpfcnpj', 'Campo CPF/CNPJ não pode ser vazio!');
            $result = false;
        } elseif (!preg_match('/^\d{11}$|^\d{14}$/', $fornecedor->getCpfCnpj())) {
            $this->addError('cpfcnpj', 'Campo CPF/CNPJ deve conter 11 dígitos (CPF) ou 14 dígitos (CNPJ)!');
            $result = false;
        }

        // Validação da Razão Social
        if (empty($fornecedor->getRazaoSocial())) {
            $this->addError('razaosocial', 'Campo RAZÃO SOCIAL não pode ser vazio!');
            $result = false;
        }

        // Validação da Rua
        if (empty($fornecedor->getRua())) {
            $this->addError('rua', 'Campo RUA não pode ser vazio!');
            $result = false;
        }

        // Validação do Número
        if (empty($fornecedor->getNumero())) {
            $this->addError('numero', 'Campo NÚMERO não pode ser vazio!');
            $result = false;
        } elseif (!is_numeric($fornecedor->getNumero())) {
            $this->addError('numero', 'Campo NÚMERO deve ser numérico!');
            $result = false;
        }

        // Validação do Bairro
        if (empty($fornecedor->getBairro())) {
            $this->addError('bairro', 'Campo BAIRRO não pode ser vazio!');
            $result = false;
        }

        // Validação da Cidade
        if (empty($fornecedor->getCidade())) {
            $this->addError('cidade', 'Campo CIDADE não pode ser vazio!');
            $result = false;
        }

        // Validação do CEP
        if (empty($fornecedor->getCep())) {
            $this->addError('cep', 'Campo CEP não pode ser vazio!');
            $result = false;
        } elseif (!preg_match('/^\d{8}$/', $fornecedor->getCep())) {
            $this->addError('cep', 'Campo CEP deve conter 8 dígitos!');
            $result = false;
        }

        // Validação do Telefone
        if (!empty($fornecedor->getTelefone()) && !preg_match('/^\d{8,9}$/', $fornecedor->getTelefone())) {
            $this->addError('telefone', 'Campo TELEFONE deve conter 8 ou 9 dígitos!');
            $result = false;
        }

        // Validação do Celular
        if (!empty($fornecedor->getCelular()) && !preg_match('/^\d{11}$/', $fornecedor->getCelular())) {
            $this->addError('celular', 'Campo CELULAR deve conter 11 dígitos!');
            $result = false;
        }

        return $result;
    }
}
