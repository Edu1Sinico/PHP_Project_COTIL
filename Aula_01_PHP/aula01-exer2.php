<?php
        $n1 = $_GET["_n1"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01-Exerc2</title>
</head>
<body>
    
    <?php
    
        if($n1%10 == 0 ){
            echo "Este número digitado é divisível por 10";
        }
        else if($n1%5 == 0){
            echo "Este número digitado é divisível por 5";
        }
        else if($n1%2 == 0){
            echo "Este número digitado é divisível por 2";
        }
        else{
            exit ("Este número digitado não é divisível por 10, nem por 5 e nem por 2.");
        }

    ?>

</body>
</html>