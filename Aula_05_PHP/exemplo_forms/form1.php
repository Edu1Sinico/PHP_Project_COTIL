<?php
$nome = $_POST["nome"];
$media = $_POST["media"];
if (isset ($_POST["curso"])) {
    $curso = $_POST["curso"];
} else {
    echo "Escolha um curso!";
    ?>
    <hr><input type="button" value="Voltar" , onclick="history.back()">
    <?php
    exit();
}
echo $nome, " | ", $media, " | ", $curso;
?>

<hr>
<input type="button" value="Voltar" , onclick="history.back()">