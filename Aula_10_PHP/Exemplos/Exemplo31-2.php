<?php
$pdo = require_once 'connect.php';

$names = [
    'Penguin/Random House',
    'Hachette Book Group',
    'Harper Collins',
    'Simon and Schuster'
];
$sql = 'INSERT INTO publishers(name) VALUES(:name)';
$statement = $pdo->prepare($sql);
foreach ($names as $name) {
    $statement->execute([
        ':name' => $name
    ]);
}
