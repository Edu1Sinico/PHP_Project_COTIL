<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\ProdutoService;

class VendaController extends  Controller
{
    private ProdutoService $produtoRepository;

    public function __construct()
    {
        $this->produtoRepository = new ProdutoService();
    }

    public function getAll(): array
    {
        return $this->produtoRepository->getAll();
    }

    public function getById(int $id): array{
        return $this->produtoRepository->getById($id);
    }

    public function index(): void
    {
        $this->render('produto/index', ['produtos' => $this->getAll()]);
    }

    public function produtosPorFornecedor(){
        $idFornecedor = $_GET['idfornecedor'];
        $lstProduto = $this->produtoRepository->getByFornecedorId($idFornecedor);
        $this->render('produto/index', ['produtos' => $lstProduto]);
    }

}