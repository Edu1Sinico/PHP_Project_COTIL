<?php
/**
* Procura livros pelo título, baseado em um padrão
*/
function find_book_by_title(\PDO $pdo, string $keyword): array
{
    $pattern = '%' . $keyword . '%';

    $sql = 'SELECT book_id, title
    FROM books
    WHERE title LIKE :pattern';

    $statement = $pdo->prepare($sql);
    $statement->execute([':pattern' => $pattern]);

    return  $statement->fetchAll(PDO::FETCH_ASSOC);
}

// conecta ao banco de dados
$pdo = require 'connect.php';

// procura livros cujo tiítulo contenha ‘es’
$books = find_book_by_title($pdo, 'bra');
foreach ($books as $book) {
    echo $book['title'] . '<br>';
}
