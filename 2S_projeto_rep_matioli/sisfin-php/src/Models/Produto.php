<?php

namespace Sisfin\Models;
use Sisfin\Models\Fornecedor;
use Sisfin\Util\TipoPessoa;

class Produto
{
    private int $_id;
    private Fornecedor $_fornecedor;
    private string $_nome;
    private float $_preco;

    /**
     * @param int $_id
     * @param string $_nome
     * @param float $_preco
     */
    public function __construct(int $_id, Fornecedor $fornecedor, string $_nome, float $_preco)
    {
        $this->_id = $_id;
        $this->_fornecedor = $fornecedor;
        $this->_nome = $_nome;
        $this->_preco = $_preco;
        return $this;
    }


    public function getListProdutos(): array
    {
        return $this->_listProdutos;
    }

    public function setListProdutos(array $listProdutos): Produto
    {
        $this->_listProdutos = $listProdutos;
        return $this;
    }

    public function getId(): int
    {
        return $this->_id;
    }

    public function setId(int $id): Produto
    {
        $this->_id = $id;
        return $this;
    }

    public function getFornecedor(): Fornecedor
    {
        return $this->_fornecedor;
    }

    public function setFornecedor(Fornecedor $fornecedor): Produto
    {
        $this->_fornecedor = $fornecedor;
        return $this;
    }

    public function getNome(): string
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Produto
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getPreco(): float
    {
        return $this->_preco;
    }

    public function setPreco(float $preco): Produto
    {
        $this->_preco = $preco;
        return $this;
    }

//------------------------------------------------
    //métodos de CRUD
    public function create(){

    }

    public function read(){

    }
    public function update(){

    }

    public function delete(){

    }
//--------------------------------------------
    public static function getAll(): array{
        $lstProdutos = array();
        $f1 = new Fornecedor(1, TipoPessoa::PESSOA_JURIDICA, 'Supermercado Catiloi', 'sucata@example.com');
        $f2 = new Fornecedor(2, TipoPessoa::PESSOA_JURIDICA, 'RR Parafusos', 'rr@example.com');
        $f3 = new Fornecedor(3, TipoPessoa::PESSOA_FISICA, 'Carol Matioli', 'kk@example.com');

        $lstProdutos[] = new Produto(1, $f3, "Bolo especial 3 camadas", 55, 00);
        $lstProdutos[] = (new Produto(2, $f3, 'Docinhos: Bem casado', 21.75));
        $lstProdutos[]= (new Produto(3, $f3, 'Docinhos: Camafeu', 29.80));
        $lstProdutos[]= (new Produto(4, $f1, 'Óleo de soja', 6.90));
        $lstProdutos[] = (new Produto(5, $f1, 'Leite integral', 4.89));
        $lstProdutos[] = (new Produto(7, $f2, 'Chave de fenda Tramontinha', 12.70));

        return $lstProdutos;
    }
}