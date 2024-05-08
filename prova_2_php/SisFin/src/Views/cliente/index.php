<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sisfin - Clientes</title>
</head>
<body>
    <h1>.:| Lista de Clientes |:.</h1>
         <?php foreach ($clientes as $cliente): ?>
            <h4><?= $cliente->getNome() ?> (<?= $cliente->getEmail() ?>) - <?= $cliente->getTipoPessoa()->value ?></h4>
        <?php endforeach; ?>
    <br>
    <a href="/">Home</a>
</body>
</html>
