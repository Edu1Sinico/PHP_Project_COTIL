<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sisfin - Produtos</title>
</head>
<body>
    <h1>.:| Lista de Produtos |:.</h1>
         <?php foreach ($produtos as $produto): ?>
            <h4><?= $produto->getId() ?> | <?= $produto->getNome() ?> | <?= $produto->getFornecedor()->getNome() ?>  | <?= $produto->getPreco() ?></h4>
        <?php endforeach; ?>
    <br>
    <a href="/">Home</a>
</body>
</html>
