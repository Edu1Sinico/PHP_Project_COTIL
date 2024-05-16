<?php

$pdo = require 'connect.php';

$sql = 'SELECT name, book_id, title
        FROM publishers p
        INNER JOIN books b ON b.publisher_id = p.publisher_id';

$statement = $pdo->query($sql);

$publishers = $statement->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
<label for="book">Selecione um livro:</label>
<select name="book" id="book">
    <?php foreach ($publishers as $publisher => $books) : ?>
        <optgroup label="<?php echo $publisher ?>">
            <?php foreach ($books as $book) : ?>
                <option value="<?php echo $book['book_id'] ?>"><?php echo $book['title'] ?></option>
            <?php endforeach ?>
        </optgroup>
    <?php endforeach ?>
</select>
</body>
