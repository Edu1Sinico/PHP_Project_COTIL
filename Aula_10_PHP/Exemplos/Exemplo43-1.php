<?php

$pdo = require 'connect.php';
$sql = 'SELECT publisher_id, name 
		FROM publishers';

$statement = $pdo->query($sql);

// retorna todos os editores (publishers)
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
    // show the publishers
    foreach ($publishers as $publisher) {
        echo $publisher['name'] . '<br>';
    }
}
