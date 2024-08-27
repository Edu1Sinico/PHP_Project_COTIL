<?php

namespace Sisfin\Models;

class ClienteValidator
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

    public function Validate(Cliente $cliente): bool
    {
        $result = true;
        if (empty($cliente->getNome())) {
            $this->addError('nome', 'Campo NOME não pode ser vazio!');
            $result = false;
        } else {
            if (strlen($cliente->getNome()) < 5) {
                $this->addError('nome', 'Campo NOME deve possuir pelo menos 5 caracteres!');
                $result = false;
            }
        }
        if (is_null($cliente->getTipoPessoa())) {
            $this->addError('tipopessoa', 'Campo TIPO PESSOA não pode ser vazio!');
            $result = false;
        }
        if (empty($cliente->getEmail())) {
            $this->addError('email', 'Campo EMAIL não pode ser vazio!');
            $result = false;
        } else {
            if (!filter_var($cliente->getEmail(), FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'Campo EMAIL deve ser um email válido!');
                $result = false;
            }
        }
        return $result;
    }
}