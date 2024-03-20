<?php

/* 9. Reescreva o exercício anterior utilizando a função max do php.*/

echo "Exercício 9: <br><br>";

$vetorNum1 = array();

for ($i = 0; $i < 40; $i++) {
    $numRdm = rand(1, 50);

    array_push($vetorNum1, $numRdm);
}

echo "Vetor 1: <br>{";

for ($i = 0; $i < 40; $i++) {
    echo $vetorNum1[$i] . " ";
}
echo "}<br><br>Maior número do vetor com o método 'max': ", max($vetorNum1);
