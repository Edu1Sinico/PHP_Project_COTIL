<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Fornecedores</title>
</head>
<body>
    <h1>.:| Lista de fornecedores |:.</h1>
         <?php foreach ($fornecedores as $fornecedor): ?>
            <b><?= $fornecedor->getNome() ?> - <?= $fornecedor->getEmail() ?> - <?= $fornecedor->getTipoPessoa()->value ?> [<a href="/fornecedor/produtos?idfornecedor=<?= $fornecedor->getId()?>">Produtos</a>]</b>
             <hr>
        <?php endforeach; ?>
    <br>
    <a href="/">Home</a>
</body>
</html>
