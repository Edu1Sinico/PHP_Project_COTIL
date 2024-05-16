<?php
$pdo = require 'connect.php';

$sql = 'SELECT publisher_id, name 
        FROM publishers';

$statement = $pdo->query($sql);
$publishers = $statement->fetchAll(PDO::FETCH_KEY_PAIR);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editores</title>
</head>
<body>
<label for="publisher">Selecione um editor:</label>
<select name="publisher" id="publisher">
    <?php foreach ($publishers as $publisher_id => $name): ?>
        <option value="<?php echo $publisher_id ?>"><?php echo $name ?></option>
    <?php endforeach ?>
</select>
</body>
</html>
