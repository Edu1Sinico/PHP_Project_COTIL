<?php

namespace Sisfin\Models;

use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;

// O arquivo FornecedorService deve ser similar a classe clienteService
class FornecedorService
{
    // Construtor com uma lista declarada
    private $fornecedorRepository;
    public function __construct()
    {
        $this->fornecedorRepository = array();
        return $this;
    }

    // Método de puxar todas as informações do banco de dados
    public function getAll(): array
    {
        try {
            // Método para estabelecer a conexão com o banco
            $con = Connection::make();
            // Comandos SQL de selecionar todas as informações da tabela
            $sql = 'SELECT * FROM fornecedor';

            // Prepara o código SQL
            $statement = $con->prepare($sql);
            // Executa o código SQL
            $statement->execute();
            // Armazena as informações dentro da array declarada no construtor
            $fornecedorRepository = $statement->fetchAll(\PDO::FETCH_ASSOC);
            // Retorna o resultado
            return $fornecedorRepository;
        } catch (\PDOException $e) {
            // Caso ocorra um problema, retorna a array vazia.
            return array();
        }
    }

    // Método de buscar as informações do banco pelo ID
    public function getById(int $id): array
    {
        try {
            $con = Connection::make();
            $sql = 'SELECT * FROM fornecedor WHERE id=:id';

            $statement = $con->prepare($sql);
            $statement->execute([':id' => $id]);
            $fornecedorRepository = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $fornecedorRepository;
        } catch (\PDOException $e) {
            return array();
        }
    }

    // Método de salvar as informações para o banco.
    public function save(Fornecedor $fornecedor): void
    {
        $cn = Connection::make();
        // Se o ID for nulo, significa que é uma operação de inserção (Create)
        if ($fornecedor->getId() === null) {
            $sql = "INSERT INTO fornecedor 
                (tipoFornecedor, cpfCnpj, razaoSocial, nome, rua, numero, bairro, cidade, complemento, cep, telefone, celular, email) 
                VALUES 
                (:tipoFornecedor, :cpfCnpj, :razaoSocial, :nome, :rua, :numero, :bairro, :cidade, :complemento, :cep, :telefone, :celular, :email)";
            $statement = $cn->prepare($sql);
            $statement->execute([
                ':cpfCnpj' => $fornecedor->getCpfCnpj(),
                ':tipoFornecedor' => $fornecedor->getTipoFornecedor(),
                ':razaoSocial' => $fornecedor->getRazaoSocial(),
                ':nome' => $fornecedor->getNome(),
                ':rua' => $fornecedor->getRua(),
                ':numero' => $fornecedor->getNumero(),
                ':bairro' => $fornecedor->getBairro(),
                ':cidade' => $fornecedor->getCidade(),
                ':complemento' => $fornecedor->getComplemento(),
                ':cep' => $fornecedor->getCep(),
                ':telefone' => $fornecedor->getTelefone(),
                ':celular' => $fornecedor->getCelular(),
                ':email' => $fornecedor->getEmail()
            ]);
            $fornecedor->setId($cn->lastInsertId());
        } else {
            // Caso contrário, é uma operação de atualização (Update)
            $sql = "UPDATE fornecedor SET 
                tipoFornecedor=:tipoFornecedor,
                cpfCnpj=:cpfCnpj, 
                razaoSocial=:razaoSocial, 
                nome=:nome, 
                rua=:rua, 
                numero=:numero, 
                bairro=:bairro, 
                cidade=:cidade, 
                complemento=:complemento, 
                cep=:cep, 
                telefone=:telefone, 
                celular=:celular, 
                email=:email 
                WHERE id=:id";
            $statement = $cn->prepare($sql);
            $statement->execute([
                ':id' => $fornecedor->getId(),
                ':tipoFornecedor' => $fornecedor->getTipoFornecedor(),
                ':cpfCnpj' => $fornecedor->getCpfCnpj(),
                ':razaoSocial' => $fornecedor->getRazaoSocial(),
                ':nome' => $fornecedor->getNome(),
                ':rua' => $fornecedor->getRua(),
                ':numero' => $fornecedor->getNumero(),
                ':bairro' => $fornecedor->getBairro(),
                ':cidade' => $fornecedor->getCidade(),
                ':complemento' => $fornecedor->getComplemento(),
                ':cep' => $fornecedor->getCep(),
                ':telefone' => $fornecedor->getTelefone(),
                ':celular' => $fornecedor->getCelular(),
                ':email' => $fornecedor->getEmail()
            ]);
        }
        header("Location: /fornecedor");
    }


    // Método de deletar a informação do banco pelo ID
    public function delete(int $id): void
    {
        try {
            $cn = Connection::make();
            if ($id != null) {
                $sql = "DELETE FROM fornecedor WHERE id=:id";
                $statement = $cn->prepare($sql);
                $statement->bindParam(":id", $id);
                $statement->execute();
            }
        } catch (\PDOException $e) {
            die($e->getMessage());
        } finally {
            header("Location: /fornecedor");
        }
    }
}
