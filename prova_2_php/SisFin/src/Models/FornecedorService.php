<?php

namespace Sisfin\Models;

use Sisfin\Util\TipoPessoa;

class FornecedorService
{
    private $clienteRepository;
    public function __construct(){
        $this->clienteRepository = array();
        $this->save(new Cliente(null,TipoPessoa::PESSOA_FISICA,'Markos Mueller', 'mm@mm.com'));
        $this->save(new Cliente(null, TipoPessoa::PESSOA_FISICA, 'Marcia Regina Savagio', 'sucata@example.com'));
        $this->save(new Cliente(null, TipoPessoa::PESSOA_JURIDICA, 'Universidade Estadual de Campinas', 'rr@example.com'));
        $this->save(new Cliente(null, TipoPessoa::PESSOA_JURIDICA, 'Microsoft Co.', 'kk@example.com'));

        return $this;
    }

    public function getAll(): array{

        return $this->clienteRepository;
    }

    public function getById(int $id): array{
        $filtro = array();

        $filtro = array_filter($this->clienteRepository, function($cliente) use ($id){
            return $cliente->getId()==$id;
        });

        return $filtro;
    }

    public function getByClienteId(int $id): array{
        $filtro = array();

        $filtro = array_filter($this->clienteRepository, function($cliente) use ($id){
            return $cliente->getCliente()->getId()==$id;
        });

        return $filtro;
    }

    public function get(clienteId $id): cliente
    {
        $filtro = array_filter($this->clienteRepository, function($cliente) use ($id){
            return $cliente->getId()==$id;
        });

        return $filtro;
    }

    public function save(cliente $cliente): void
    {
        //se for igual a null significa que é Create
        if ($cliente->getId() == null)
        {
            //busca o ultimo ID
            $cli = (end($this->clienteRepository));
            if($cli) {
                if ($cli->getId() == null)
                    $id = 0;
                else
                    $id = $cli->getId();
            }else{
                $id=0;
            }
            $cliente->setId($id + 1);
            $this->clienteRepository[] = $cliente;
        }
        else {
            //senão é Update
            for($i = 0; $i < count($this->clienteRepository); $i++) {
                if($this->clienteRepository[$i]->getId()==$cliente->getId()){
                    $this->clienteRepository[$i] = $cliente;
                }
            }

        }
    }

    public function delete(int $cliId): void
    {
        $this->clienteRepository = array_filter($this->clienteRepository, function($p) use($cliId) {
            return $p->getId() !== $cliId;
        });
    }

}