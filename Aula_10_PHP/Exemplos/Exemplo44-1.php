<?php
$publisher_id = 3;

// conecta ao banco de dados
$pdo = require 'connect.php';

$sql = 'DELETE FROM publishers
        WHERE publisher_id < :publisher_id';

$statement = $pdo->prepare($sql);
$statement->bindParam(':publisher_id', $publisher_id, PDO::PARAM_INT);

if ($statement->execute()) {
    echo $statement->rowCount() . ' linhas(s) deletadas com sucesso.';
}
