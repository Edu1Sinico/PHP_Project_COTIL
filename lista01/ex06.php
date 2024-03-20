<?php
/* 6. Crie um script que cria um vetor de 40 posições com valores aleatórios, entre 1-50 e
encontre o menor valor. Exiba o valor encontrado. */

echo "Exercício 6: <br><br>";

$vetorNum1 = array();
$menorValor = 0;
$temp = 51;

for ($i = 0; $i < 40; $i++) {
    $numRdm = rand(1, 50);
    array_push($vetorNum1, $numRdm);
    if($temp > $numRdm){
        $temp = $numRdm;
        $menorValor = $temp;
    }
}
echo "Vetor 1: <br>{";

for ($i = 0; $i < 40; $i++) {
    echo $vetorNum1[$i] . " ";
}
echo "}<br><br> Menor número do vetor: $menorValor";
