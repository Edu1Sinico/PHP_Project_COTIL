<?php

// conecta ao banco de dados e obtem uma instância de PDO
$pdo = require 'connect.php';

$sql = 'SELECT publisher_id, name 
        FROM publishers';

// executa a query
$statement = $pdo->query($sql);

// pega todas as linhas
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

// exibe o nome do editor
foreach ($publishers as $publisher) {
    echo $publisher['name'] . '<br>';
}
