<?php
/* 2. Crie um script em PHP que gera 20 valores aleatórios, 
entre 100-200, e os exibe no navegador.  Obs:  Utilize um laço do while.*/

echo "Exercício 2: <br><br>";
echo "Números aleatórios: <br>";
$cont = 0;
while ($cont <= 20) {
    $numRdm = rand(100, 200);
    if ($cont != 20) {
        echo "$numRdm; ";
    } else {
        echo "$numRdm.";
    }
    $cont++;
}
