<?php

namespace Sisfin\Models;
use Sisfin\Repository\IRepository;
use Sisfin\Repository\ProdutoId;
use Sisfin\Util\TipoPessoa;
class ProdutoService
{
    private $produtoRepository;
    public function __construct(){
        $this->produtoRepository = array();
        $f1 = new Fornecedor(1, TipoPessoa::PESSOA_JURIDICA, 'Supermercado Catiloi', 'sucata@example.com');
        $f2 = new Fornecedor(2, TipoPessoa::PESSOA_JURIDICA, 'RR Parafusos', 'rr@example.com');
        $f3 = new Fornecedor(3, TipoPessoa::PESSOA_FISICA, 'Carol Matioli', 'kk@example.com');

        $this->save(new Produto(null, $f3, "Bolo especial 3 camadas", 55, 00));
        $this->save(new Produto(null, $f3, 'Docinhos: Bem casado', 21.75));
        $this->save(new Produto(null, $f3, 'Docinhos: Camafeu', 29.80));
        $this->save(new Produto(null, $f1, 'Óleo de soja', 6.90));
        $this->save(new Produto(null, $f1, 'Leite integral', 4.89));
        $this->save(new Produto(null, $f2, 'Chave de fenda Tramontinha', 12.70));

        $this->save(new Produto(6, $f2, 'Chave de fenda Tramontina', 12.70));

        return $this;
    }

    public function getAll(): array{

        return $this->produtoRepository;
    }

    public function getById(int $id): array{
        $filtro = array();

        $filtro = array_filter($this->produtoRepository, function($produto) use ($id){
            return $produto->getId()==$id;
        });

        return $filtro;
    }

    public function getByFornecedorId(int $id): array{
        $filtro = array();

        $filtro = array_filter($this->produtoRepository, function($produto) use ($id){
            return $produto->getFornecedor()->getId()==$id;
        });

        return $filtro;
    }

    public function get(ProdutoId $id): Produto
    {
        $filtro = array_filter($this->produtoRepository, function($produto) use ($id){
            return $produto->getId()==$id;
        });

        return $filtro;
    }

    public function save(Produto $produto): void
    {
        //se for igual a null significa que é Create
        if ($produto->getId() == null)
        {
            //busca o ultimo ID
            $prod = (end($this->produtoRepository));
            if($prod) {
                if ($prod->getId() == null)
                    $id = 0;
                else
                    $id = $prod->getId();
            }else{
                $id=0;
            }
            $produto->setId($id + 1);
            $this->produtoRepository[] = $produto;
        }
        else {
            //senão é Update
            for($i = 0; $i < count($this->produtoRepository); $i++) {
                if($this->produtoRepository[$i]->getId()==$produto->getId()){
                    $this->produtoRepository[$i] = $produto;
                }
            }

         }
    }

    public function delete(int $prodId): void
    {
        $this->produtoRepository = array_filter($this->produtoRepository, function($p) use($prodId) {
            return $p->getId() !== $prodId;
        });
    }
}