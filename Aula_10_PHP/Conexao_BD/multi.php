<?php

function find_book_by_title(\PDO $pdo, String $keyword):
array
{
    $pattern = '%' . keyword .  '%';
    $sql = 'SELECT book_id, title FROM books WHERE title LIKE :pattern';
    $statement = $pdo->prepare($sql);
    $statement->execute([':pattern' => $pattern]);
    $result = $statement->fetchAll(PDO::$FETCH_ASSOC);
    var_dump('$result');
    return $result;
}

$pdo = require 'connect.php';

$books = find_book_by_title($pdo,'bra');
foreach ($books as $book) {
    echo $book['title'] . '<br>';
}