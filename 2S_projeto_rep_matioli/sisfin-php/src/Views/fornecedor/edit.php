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

<body class="container">
    <h1 class="text-center">.:| Edição de Fornecedores |:.</h1>

    <?php
    if (isset($fornecedor)) {
        $id = $fornecedor[0]["id"];
        $tipoFornecedor = $fornecedor[0]["tipoFornecedor"];
        $nome = $fornecedor[0]["nome"];
        $razaoSocial = $fornecedor[0]["razaoSocial"];
        $cpfCnpj = $fornecedor[0]["cpfCnpj"];
        $rua = $fornecedor[0]["rua"];
        $numero = $fornecedor[0]["numero"];
        $bairro = $fornecedor[0]["bairro"];
        $cidade = $fornecedor[0]["cidade"];
        $complemento = $fornecedor[0]["complemento"];
        $cep = $fornecedor[0]["cep"];
        $telefone = $fornecedor[0]["telefone"];
        $celular = $fornecedor[0]["celular"];
        $email = $fornecedor[0]["email"];
    }
    ?>

    <form action="/fornecedor/insert/" method="get">
        <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $id; ?>">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $nome; ?>">
        </div>
        <div class="form-group">
            <label for="razaoSocial">Razão Social:</label>
            <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" placeholder="Razão Social" value="<?= $razaoSocial; ?>">
        </div>
        <div class="form-group">
            <label for="cpfCnpj">CPF/CNPJ:</label>
            <input type="text" class="form-control" id="cpfCnpj" name="cpfCnpj" placeholder="CPF ou CNPJ" value="<?= $cpfCnpj; ?>">
        </div>
        <div class="form-group">
            <label for="rua">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?= $rua; ?>">
        </div>
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="number" class="form-control" id="numero" name="numero" placeholder="Número" value="<?= $numero; ?>">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?= $bairro; ?>">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?= $cidade; ?>">
        </div>
        <div class="form-group">
            <label for="complemento">Complemento:</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" value="<?= $complemento; ?>">
        </div>
        <div class="form-group">
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?= $cep; ?>">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?= $telefone; ?>">
        </div>
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" value="<?= $celular; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $email; ?>">
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
    <br>
    <br>
    <a href="/fornecedor">Voltar</a>
</body>

</html>