<?php

use Sisfin\Router;
use Sisfin\Controllers\ClienteController;
use Sisfin\Controllers\ProdutoController;
use Sisfin\Controllers\FornecedorController;
use Sisfin\Controllers\HomeController;
use Sisfin\Controllers\VendaController;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/cliente', ClienteController::class, 'index');
$router->addRoute('/cliente/id', ClienteController::class, 'findByClienteId');
$router->addRoute('/cliente/insert/', ClienteController::class, 'insertCliente');
$router->addRoute('/cliente/delete/', ClienteController::class, 'deleteCliente');
$router->addRoute('/cliente/edit/', ClienteController::class, 'editCliente');
$router->addRoute('/fornecedor', FornecedorController::class, 'index');
$router->addRoute('/fornecedor/insert/', fornecedorController::class, 'insertFornecedor');
$router->addRoute('/fornecedor/delete/', fornecedorController::class, 'deleteFornecedor');
$router->addRoute('/fornecedor/edit/', fornecedorController::class, 'editFornecedor');
$router->addRoute('/fornecedor/produtos', ProdutoController::class, 'produtosPorFornecedor');
$router->addRoute('/produto', ProdutoController::class, 'index');
$router->addRoute('/venda', VendaController::class, 'index');
