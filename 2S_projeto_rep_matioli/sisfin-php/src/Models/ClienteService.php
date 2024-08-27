<?php

namespace Sisfin\Models;

use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;

class ClienteService
{
    private $clienteRepository;
    public function __construct(){
        $this->clienteRepository = array();
        return $this;
    }

    public function getAll(): array{
        try{
            $con = Connection::make();
            $sql = 'SELECT * FROM cliente';

            $statement = $con->prepare($sql);
            $statement->execute();
            $clienteRepository = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $clienteRepository;
        }catch(\PDOException $e){
             return array();
        }
    }

    public function getById(int $id): array{
        try{
            $con = Connection::make();
            $sql = 'SELECT * FROM cliente WHERE id=:id';

            $statement = $con->prepare($sql);
            $statement->execute([':id' => $id]);
            $clienteRepository = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $clienteRepository;
        }catch(\PDOException $e){
            return array();
        }

    }
    public function save(cliente $cliente): void
    {
        $cn = Connection::make();
        //se for igual a null significa que é Create
        if ($cliente->getId() == null)
        {
            $sql = "INSERT INTO cliente (nome, tipopessoa,  email) VALUES(:nome, :tipopessoa, :email)";
            $statement = $cn->prepare($sql);
            $statement->execute([
                ':nome' => $cliente->getNome(),
                ':tipopessoa'=>$cliente->getTipoPessoa(),
                ':email'=>$cliente->getEmail()
            ]);
            $cliente->setId($cn->lastInsertId());
        }
        else {
            //senão é Update
            $sql = "UPDATE cliente SET nome=:nome, tipopessoa=:tipopessoa, email=:email WHERE id=:id";
            $statement = $cn->prepare($sql);
            $statement->execute([
                ':id'=>$cliente->getId(),
                ':nome' => $cliente->getNome(),
                ':tipopessoa'=>$cliente->getTipoPessoa(),
                ':email'=>$cliente->getEmail()
            ]);
        }
    }

    public function delete(int $id): void
    {
        try {
            $cn = Connection::make();
            if ($id != null) {
                $sql = "DELETE FROM cliente WHERE id=:id";
                $statement = $cn->prepare($sql);
                $statement->bindParam(":id", $id);
                $statement->execute();
            }
        }catch (\PDOException $e){
            die($e->getMessage());
        } finally {
            header("Location: /cliente");
        }
    }
}