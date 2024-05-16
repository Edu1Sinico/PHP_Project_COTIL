<?php


$publisher_id = 1;

// connect to the database and select the publisher
$pdo = require 'connect.php';

$sql = 'SELECT publisher_id, name 
		FROM publishers
        WHERE publisher_id = :publisher_id';

$statement = $pdo->prepare($sql);
$statement->bindParam(':publisher_id', $publisher_id, PDO::PARAM_INT);
$statement->execute();
$publisher = $statement->fetch(PDO::FETCH_ASSOC);

if ($publisher) {
    echo $publisher['publisher_id'] . '.' . $publisher['name'];
} else {
    echo "O editor com id $publisher_id não foi encontrado.";
}
