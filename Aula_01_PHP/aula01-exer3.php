<?php
    $nome = $_POST["_nome"];
    $sexo = $_POST["_sexo"];
    $idade = $_POST["_idade"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01-Exerc3</title>
</head>
<body>

    <center>
        <form action="" method="post">
            <label>Nome: </label>
            <input type="text" name="_nome" id="_nome">
            <br>
            <label>Sexo: </label>
            <br>
            <label>Feminino: </label>
            <input type="radio" name="_sexo" id="_sexo">
            <br>
            <label>Masculino: </label>
            <input type="radio" name="_sexo" id="_sexo" >
            <br>
            <label>Idade: </label>
            <input type="text" name="_idade" id="_idade">
            <input type="submit" value="Cadastrar">
        </form>
    </center>
    
    <?php
        if($idade > 25){
            echo "Aprovado!";
        }
        else{
            echo "Recusado.";
        }
    ?>

</body>
</html>