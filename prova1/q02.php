<?php
echo "<h1>Questão - 2</h1>";
echo "Digite um valor <br><br>";
if(isset($_GET["nro"])){
    $n1 = $_GET["nro"];

    if(is_numeric($n1)){
        echo "O número digitado foi: " . $n1;
    }
    else{
        echo "Parâmetros insuficientes!";
    }
}
else{
    echo "Parâmetros insuficientes!";
}