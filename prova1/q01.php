<?php
    $ra = 201115;
if(isset($_POST["_n1"]) && isset($_POST["_n2"])) {
    $nota1 = $_POST["_n1"];
    $nota2 = $_POST["_n2"];
    $media = ($nota1 + $nota2)/2;
    $situacao = ""; 

    if($media >= 6){
        $situacao = "Aprovado.";
    }
    else if($media >= 4 && $media < 6){
        $situacao = "Recuperação.";
    }
    else if($media <= 4){
        $situacao = "Reprovado.";
    }
    else{
        $situacao = "Por favor informe os valores";
    }
}
else{
    echo "Informe as notas.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova - Questão 01</title>
</head>
<body>
    <center>
        <h1>Questão - 1</h1>
        <form method="post">
            <?php
                echo "Seu RA: " . $ra . "<br><br>";
            ?>
            <label for="">Informe sua primeira nota:</label><br>
            <input type="number" name="_n1"><br><br>
            <label for="">Informe sua segunda nota:</label><br>
            <input type="number" name="_n2"><br><br>
            <input type="submit" value="Enviar">
            <?php
                echo  "<br><br>Sua situação: " . $situacao;
            ?>
        </form>
    </center>
</body>
</html>
