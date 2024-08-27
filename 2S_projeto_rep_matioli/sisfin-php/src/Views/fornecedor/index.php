<?php

namespace Sisfin\Models;

use Sisfin\Util\ShowError;

if (!isset($errors)) $errors = array();
if (!isset($state)) $state = new Fornecedor();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sisfin - Fornecedores</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a8a664a316.js" crossorigin="anonymous"></script>
</head>

<style>
    body {
        margin: 5px;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .title {
        background-color: greenyellow;
        margin: 10px;
        padding: 15px;
        width: 85%;
        border-radius: 30px;
        color: white;
    }

    form .div-form {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        width: 100vh;
    }

    form .div-form .div-form-section-1,
    .div-form-section-2 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    form .div-form-section-3 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    form .div-form-section-3 .div-form-input-radio {
        padding: 10px;
    }
</style>

<body class="container">
    <h1 class="text-center title">.:| Lista de fornecedores |:.</h1>

    <form action="/fornecedor/insert/" method="get">
        <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $state->getId(); ?>">
        </div>

        <div class="div-form">
            <div class="div-form-section-1">

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $state->getNome(); ?>">
                    <?= ShowError::GetField('nome', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="razaoSocial">Razão Social:</label>
                    <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" placeholder="Razão Social" value="<?= $state->getRazaoSocial(); ?>">
                    <?= ShowError::GetField('razaoSocial', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="cpfCnpj">CPF/CNPJ:</label>
                    <input type="text" class="form-control" id="cpfCnpj" name="cpfCnpj" placeholder="CPF ou CNPJ" value="<?= $state->getCpfCnpj(); ?>">
                    <?= ShowError::GetField('cpfCnpj', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="rua">Rua:</label>
                    <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?= $state->getRua(); ?>">
                    <?= ShowError::GetField('rua', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="numero">Número:</label>
                    <input type="number" class="form-control" id="numero" name="numero" placeholder="Número" value="<?= $state->getNumero(); ?>">
                    <?= ShowError::GetField('numero', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?= $state->getBairro(); ?>">
                    <?= ShowError::GetField('bairro', $errors) ?>
                </div>
            </div>

            <div class="div-form-section-2">
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?= $state->getCidade(); ?>">
                    <?= ShowError::GetField('cidade', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="complemento">Complemento:</label>
                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" value="<?= $state->getComplemento(); ?>">
                    <?= ShowError::GetField('complemento', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?= $state->getCep(); ?>">
                    <?= ShowError::GetField('cep', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?= $state->getTelefone(); ?>">
                    <?= ShowError::GetField('telefone', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" value="<?= $state->getCelular(); ?>">
                    <?= ShowError::GetField('celular', $errors) ?>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $state->getEmail(); ?>">
                    <?= ShowError::GetField('email', $errors) ?>
                </div>
            </div>
        </div>

        <br>

        <div class="form-group div-form-section-3">
            <div class="div-inputs-section">
                <div class="form-check form-check-inline div-form-input-radio">
                    <input class="form-check-input" type="radio" name="tipoFornecedor" id="pessoaFisica" value="1" <?= $state->getTipoFornecedor() == 1 ? "checked" : ""; ?>>
                    <label class="form-check-label" for="pessoaFisica">
                        Pessoa Física
                    </label>
                </div>
                <div class="form-check form-check-inline div-form-input-radio">
                    <input class="form-check-input" type="radio" name="tipoFornecedor" id="PessoaJuridica" value="2" <?= $state->getTipoFornecedor() == 2 ? "checked" : ""; ?>>
                    <label class="form-check-label" for="pessoaJuridica">
                        Pessoa Jurídica
                    </label>
                </div>
            </div>
            <?= ShowError::GetField('tipofornecedor', $errors) ?>
        </div>

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
                <th scope="col">Tipo de Fornecedor</th>
                <th scope="col">Razão Social</th>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Rua</th>
                <th scope="col">Número</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Complemento</th>
                <th scope="col">CEP</th>
                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">Email</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($fornecedores as $fornecedor) : ?>
                <tr>
                    <th scope="row"><?= $fornecedor["id"] ?></th>
                    <td><?= $fornecedor["nome"] ?></td>
                    <td><?= $fornecedor["tipoFornecedor"] ?></td>
                    <td><?= $fornecedor["razaoSocial"] ?></td>
                    <td><?= $fornecedor["cpfCnpj"] ?></td>
                    <td><?= $fornecedor["rua"] ?></td>
                    <td><?= $fornecedor["numero"] ?></td>
                    <td><?= $fornecedor["bairro"] ?></td>
                    <td><?= $fornecedor["cidade"] ?></td>
                    <td><?= $fornecedor["complemento"] ?></td>
                    <td><?= $fornecedor["cep"] ?></td>
                    <td><?= $fornecedor["telefone"] ?></td>
                    <td><?= $fornecedor["celular"] ?></td>
                    <td><?= $fornecedor["email"] ?></td>
                    <td>
                    <td><span>
                            <a class="btn btn-danger" href="/fornecedor/delete/?id=<?= $fornecedor["id"] ?>">
                                <i class="fas fa-minus-circle"></i>
                            </a></span>
                    </td>
                    <td><span>
                            <a class="btn btn-warning" href="/fornecedor/edit/?id=<?= $fornecedor["id"] ?>">
                                <i class="fas fa-edit"></i></a></span>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="/">Home</a>
</body>

</html>