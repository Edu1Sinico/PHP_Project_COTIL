<?php
/* 4. Crie um script em PHP que cria dois vetores de 10 posições preenchidos com valores aleatórios 
e faça a soma dos elementos de mesmo índice, colocando o resultado em  um  terceiro  vetor. 
 Exiba os 3  vetores,  um  após  o  outro.  Obs:  Utilize um laço for */

echo "Exercício 4: <br><br>";

$vetorNum1 = array();
$vetorNum2 = array();
$vetorResult = array();
$cont = 0;

echo "Valores do Vetor 1: <br>{";
while ($cont <= 10) {
    $numRdm = rand(0, 100);
    $numRdm2 = rand(0, 100);

    array_push($vetorNum1, $numRdm);
    array_push($vetorNum2, $numRdm2);

    $cont++;
}

for ($i = 0; $i <= 10; $i++) {
    array_push($vetorResult, $vetorNum1[$i] + $vetorNum2[$i]);
    echo $vetorNum1[$i] . " ";
}
echo "} <br><br> Valores do Vetor 2: <br>{";

for ($i = 0; $i <= 10; $i++) {
    echo $vetorNum2[$i] . " ";
}
echo "} <br><br> Vetor com o resultado da soma entre o vetor 1 e o 2: <br>{";
for ($i = 0; $i <= 10; $i++) {
    echo $vetorResult[$i] . " ";
}
echo "}";

