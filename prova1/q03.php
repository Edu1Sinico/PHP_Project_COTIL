<?php
echo "<h1>Questão - 3</h1>";
echo "Digite o seu RA <br><br>";
if(isset($_GET["ra"])){
    $ra = $_GET["ra"];
    if(strlen($ra) == 6){
        echo "Login realizado com sucesso!";
    }
    else if (strlen($ra) < 6){
        echo "Número de dígitos menor do que o exigido!";
    }
    else if (strlen($ra) > 6){
        echo "Número de dígitos superior ao exigido!";
    }
}
else{
    echo "Parâmetros insuficientes!";
}