<?php
function get_author_id(\PDO $pdo, string $first_name, string $last_name)
{
    $sql = 'SELECT author_id 
            FROM authors 
            WHERE first_name = :first_name 
                AND last_name = :last_name';

    $statement = $pdo->prepare($sql);

    $statement->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $statement->bindParam(':last_name', $last_name, PDO::PARAM_STR);

    if ($statement->execute()) {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row !== false ? $row['author_id'] : false;
    }

    return false;
}

function insert_author(\PDO $pdo, string $first_name, string $last_name): int
{
    $sql = 'INSERT INTO authors(first_name, last_name) 
            VALUES(:first_name, :last_name)';

    $statement = $pdo->prepare($sql);

    $statement->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $statement->bindParam(':last_name', $last_name, PDO::PARAM_STR);

    $statement->execute();

    return  $pdo->lastInsertId();
}

function insert_book(\PDO $pdo, string $title, string $isbn, string $published_date, int $publisher_id): int
{
    $sql = 'INSERT INTO books(title, isbn, published_date, publisher_id) 
            VALUES(:title, :isbn, :published_date, :publisher_id)';

    $statement = $pdo->prepare($sql);

    $statement->bindParam(':title', $title, PDO::PARAM_STR);
    $statement->bindParam(':isbn', $isbn, PDO::PARAM_STR);
    $statement->bindParam(':published_date', $published_date, PDO::PARAM_STR);
    $statement->bindParam(':publisher_id', $publisher_id, PDO::PARAM_INT);

    $statement->execute();

    return  $pdo->lastInsertId();
}

function insert_book_author(\PDO $pdo, int $book_id, int $author_id)
{
    $sql = 'INSERT INTO book_authors(book_id, author_id) 
            VALUES(:book_id, :author_id)';

    $statement = $pdo->prepare($sql);

    $statement->bindParam(':book_id', $book_id, PDO::PARAM_INT);
    $statement->bindParam(':author_id', $author_id, PDO::PARAM_INT);

    $statement->execute();
}
