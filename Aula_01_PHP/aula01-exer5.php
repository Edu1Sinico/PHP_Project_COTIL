<?php
    $l1= $_POST["l1"];
    $l2= $_POST["l2"];
    $l3= $_POST["l3"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01-Exerc5</title>
</head>
<body>

    <center>
        <form action="" method="post">
            <label>Digite o lado 1: </label>
            <input type="text" name="l1" id="_nome">
            <br><br>
            <label>Digite o lado 2: </label>
            <input type="text" name="l2" id="_nome">
            <br><br>
            <label>Digite o lado 3: </label>
            <input type="text" name="l3" id="_nome">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </center>
    
    <?php
        if($l1 == $l2 && $l2 == $l3){
            echo "<h2>Triângulo Equilátero</h2>";
        }
        else if($l1 == $l2 && $l2 != $l3){
            echo "<h2>Triângulo Isóseles</h2>";
        }
        else if($l1 != $l2 && $l2 != $l3){
            echo "<h2>Triângulo Escaleno</h2>";
        }
        else{
            echo "<h2>Informe os valores!</h2>";
        }
    ?>

</body>
</html>