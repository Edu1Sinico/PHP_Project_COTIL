<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sisfin - Alunos</title>
</head>

<body>
    <h1>.:| Lista de Alunos |:.</h1>
    <!--
Exibir aqui a lista de alunos que está sendo passada como parâmetro
pelo método getAll() do controlaador AlunoController.
-->
    <?php foreach ($alunos as $aluno) : ?>
        <h4><?= $aluno->getRa() ?> - <?= $aluno->getNome() ?> - <?= $aluno->getTurma() ?></h4>
    <?php endforeach; ?>
    <br>
    <a href="/">Home</a>
</body>

</html><?php
