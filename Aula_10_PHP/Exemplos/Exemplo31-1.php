<?php
$pdo = require_once 'connect.php';
//insere um único editor
$name = 'Matioli';
$sql = 'INSERT INTO publishers(name) VALUES(:name)';
$statement = $pdo->prepare($sql);
$statement->execute([
    ':name' => $name
]);
$publisher_id = $pdo->lastInsertId();

echo 'O editor ' . $publisher_id . ' foi inserido';
