<?php

namespace Sisfin\Models;

use Sisfin\Util\ShowError;

if (!isset($errors)) $errors = array();
if (!isset($state)) $state = new Cliente();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sisfin - Clientes</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--    <script src="https://kit.fontawesome.com/a8a664a316.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<style>
    body {
        margin: 5px;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* width: 100%; */
    }

    .title {
        background-color: greenyellow;
        margin: 10px;
        padding: 15px;
        width: 85%;
        border-radius: 30px;
        color: white;
    }
</style>

<body class="container">
    <h1 class="text-center title">.:| Cadastro de Clientes |:.</h1>

    <form action="/cliente/insert/" method="get">
        <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $state->getId(); ?>">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $state->getNome(); ?>">
            <?= ShowError::GetField('nome', $errors) ?>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $state->getEmail(); ?>">
            <?= ShowError::GetField('email', $errors) ?>
        </div>

        <label>Tipo Pessoa:</label>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipopessoa" id="pessoaFisica" value="1" <?= $state->getTipoPessoa() == 1 ? "checked" : ""; ?>>
            <label class="form-check-label" for="pessoaFisica">
                Pessoa Física
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipopessoa" id="PessoaJuridica" value="2" <?= $state->getTipoPessoa() == 2 ? "checked" : ""; ?>>
            <label class="form-check-label" for="pessoaJuridica">
                Pessoa Jurídica
            </label>
        </div>
        <br>
        <?= ShowError::GetField('tipopessoa', $errors) ?>

        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

    <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($clientes)) {
            ?> <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <th scope="row"><?= $cliente["id"] ?></th>
                        <td><?= $cliente["nome"] ?></td>
                        <td><?= $cliente["email"] ?></td>
                        <td><?php
                            echo $cliente["tipopessoa"] == 1 ? "Pessoa Física" : "Pessoa Jurídica"
                            ?></td>
                        <td><span>
                                <a class="btn btn-danger" href="/cliente/delete/?id=<?= $cliente["id"] ?>">
                                    <i class="fas fa-minus-circle"></i></span></a></td>
                        <td><span>
                                <a class="btn btn-warning" href="/cliente/edit/?id=<?= $cliente["id"] ?>">
                                    <i class="fas fa-edit"></i></span></td>
                    </tr>
                <?php endforeach; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="/">Home</a>
</body>

</html>