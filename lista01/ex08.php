<?php
/* 8. Crie um script que cria um vetor de 40 posições com valores aleatórios, entre 1-50 e
encontre o menor valor. Exiba o valor encontrado. */

echo "Exercício 8: <br><br>";

$vetorNum1 = array();
$maiorValor = 0;
$temp = 0;

for ($i = 0; $i < 40; $i++) {
    $numRdm = rand(1, 50);
    array_push($vetorNum1, $numRdm);
    if($temp < $numRdm){
        $temp = $numRdm;
        $maiorValor = $temp;
    }
}
echo "Vetor 1: <br>{";

for ($i = 0; $i < 40; $i++) {
    echo $vetorNum1[$i] . " ";
}
echo "}<br><br> Maior número do vetor: $maiorValor";
