<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\ClienteService;

class FornecedorController  extends Controller
{
    private ClienteService $fornecedorRepository;

    public function __construct()
    {
        $this->fornecedorRepository = new ClienteService();
    }

    public function getAll(): array
    {
        return $this->fornecedorRepository->getAll();
    }

    public function getById(int $id): array{
        return $this->fornecedorRepository->getById($id);
    }

    public function index(): void
    {
        $this->render('fornecedor/index', ['fornecedores' => $this->getAll()]);
    }

}