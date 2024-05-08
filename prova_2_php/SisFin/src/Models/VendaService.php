<?php

namespace Sisfin\Models;

use Sisfin\Util\TipoPessoa;

class VendaService
{
    private $vendaRepository;
    public function __construct(){
        $this->vendaRepository = array();

        $cl1=new Cliente(1,'João das Dores', 'jodor@example.com',TipoPessoa::PESSOA_FISICA);
        $cl2=new Cliente(2,'Maria Atanazia', 'mata@example.com',TipoPessoa::PESSOA_JURIDICA);
        $cl3=new Cliente(3,'Carlota Richio', 'carris@example.com',TipoPessoa::PESSOA_FISICA);

        $now =  new \DateTime();

        $this->save(new Venda(1, $now,"Consumidor", 0, 199.90, $cl1));
        $this->save(new Venda(2, $now,"Consumidor ", 0, 35.78, $cl1));
        $this->save(new Venda(3, $now,"Consumidor", 0, 265.99, $cl2));
        $this->save(new Venda(4, $now,"Consumidor", 0, 1130.70, $cl3));

        return $this;
    }

    public function getAll(): array{

        return $this->vendaRepository;
    }

    public function getById(int $id): array{
        $filtro = array();

        $filtro = array_filter($this->vendaRepository, function($venda) use ($id){
            return $venda->getId()==$id;
        });

        return $filtro;
    }

    public function getByClienteId(int $id): array{
        $filtro = array();

        $filtro = array_filter($this->vendaRepository, function($venda) use ($id){
            return $venda->getCliente()->getId()==$id;
        });

        return $filtro;
    }

    public function get(int $id): Venda
    {
        $filtro = array_filter($this->vendaRepository, function($venda) use ($id){
            return $venda->getId()==$id;
        });

        return $filtro;
    }

    public function save(venda $venda): void
    {
        //se for igual a null significa que é Create
        if ($venda->getId() == null)
        {
            //busca o ultimo ID
            $cli = (end($this->vendaRepository));
            if($cli) {
                if ($cli->getId() == null)
                    $id = 0;
                else
                    $id = $cli->getId();
            }else{
                $id=0;
            }
            $venda->setId($id + 1);
            $this->vendaRepository[] = $venda;
        }
        else {
            //senão é Update
            for($i = 0; $i < count($this->vendaRepository); $i++) {
                if($this->vendaRepository[$i]->getId()==$venda->getId()){
                    $this->vendaRepository[$i] = $venda;
                }
            }

        }
    }

    public function delete(int $cliId): void
    {
        $this->vendaRepository = array_filter($this->vendaRepository, function($p) use($cliId) {
            return $p->getId() !== $cliId;
        });
    }

}