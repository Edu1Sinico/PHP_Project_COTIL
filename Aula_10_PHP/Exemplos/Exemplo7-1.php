<?php

require 'functions.php';
$pdo = require 'connect.php';

$book = [
    'title' => 'Hardware na Prática',
    'isbn' => '9780525539766',
    'published_date' => '2021-03-23',
    'publisher_id' => 5,
];

$author = [
    'first_name' => 'Laércio',
    'last_name' => 'Vasconcelos',
];

try {
    $pdo->beginTransaction();

    // find the author by first name and last name
    $author_id = get_author_id(
        $pdo,
        $author['first_name'],
        $author['last_name']
    );

    // if author not found, insert a new author
    if (!$author_id) {
        $author_id = insert_author(
            $pdo,
            $author['first_name'],
            $author['last_name']
        );
    }

    $book_id = insert_book(
        $pdo,
        $book['title'],
        $book['isbn'],
        $book['published_date'],
        $book['publisher_id']
    );

    // insere o relacionamento entre book e author
    insert_book_author($pdo, $book_id, $author_id);

    // confirma a transação
    $pdo->commit();
    echo "Transação concluida com sucesso!";
} catch (\PDOException $e) {
    // desfaz a transação
    $pdo->rollBack();

    // exibe mensagem de erro
    die($e->getMessage());
}
