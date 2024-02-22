<?php
        $n1 = $_GET["_n1"];
        $n2 = $_GET["_n2"];
        $soma = ($n1 + $n2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01-Exerc1</title>
</head>
<body>
    
    <?php

        // if($soma > 20){
        //     echo "Resultado: " . ($soma+8);
        // }
        // else{
        //     echo "Resultado: " . ($soma-5);
        // }

        echo $soma > 20 ? "Resultado: " . ($soma+8) : "Resultado: " . ($soma-5);

    ?>

</body>
</html>