<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>
</head>
<body>
    <h1>.:| Lista de usuários |:.</h1>
         <?php foreach ($vendas as $venda): ?>
            <h4><?= $venda->getCliente()->getNome() ?> | <?= $venda->getDescricao() ?> | <?= $venda->getValorTotal() ?></h4>
        <?php endforeach; ?>
    <br>
    <a href="/">Home</a>
</body>
</html>
