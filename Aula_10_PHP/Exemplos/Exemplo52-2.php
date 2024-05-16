<?php

// conecta ao banco de dados e obtem uma insância de PDO
$pdo = require 'connect.php';

$sql = 'SELECT publisher_id, name 
        FROM publishers
        WHERE publisher_id > :publisher_id';

// executa a query
$statement = $pdo->prepare($sql);
$statement->execute([
    ':publisher_id' => 2
]);
// pega todas as linhas
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

// exibe os editores
foreach ($publishers as $publisher) {
    echo $publisher['publisher_id'] . '.' . $publisher['name'] . '<br>';
}
