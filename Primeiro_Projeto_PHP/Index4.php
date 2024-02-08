<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset()</title>
</head>
<body>
    
<?php
    $ra = $_GET["ra"];
    $curso = $_GET["curso"];
    

    if(!isset($ra) or !isset($curso)){
        // echo "Erro: Dados insuficientes!";
        header("Location: index3.php");
        exit();
    }
    else {
        echo "$ra - $curso ";
    }
?>

</body>
</html>