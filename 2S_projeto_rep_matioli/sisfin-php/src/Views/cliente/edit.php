<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sisfin - Clientes</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a8a664a316.js" crossorigin="anonymous"></script>
</head>
<body class="container">
<h1>.:| Cadastro de Clientes |:.</h1>

<?php
if(isset($cliente)){
    $id = $cliente[0]["id"];
    $nome = $cliente[0]["nome"];
    $email = $cliente[0]["email"];
    $tipopessoa = $cliente[0]["tipopessoa"];
}

?>

<form action="/cliente/insert/" method="get">
    <div class="form-group">
        <input type="hidden" class="form-control" id="id" name="id" value="<?=$id;?>">
    </div>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?=$nome;?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$email;?>">
    </div>

    <label>Tipo Pessoa:</label>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipopessoa" id="pessoaFisica" value="1">
        <label class="form-check-label" for="pessoaFisica">
            Pessoa Física
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipopessoa" id="PessoaJuridica" value="2">
        <label class="form-check-label" for="pessoaJuridica">
            Pessoa Jurídica
        </label>
    </div>

    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>
<br>
<br>
<a href="/cliente">Voltar</a>
</body>
</html>
