<?php

/* 5. Crie  um  script  em  PHP  que  cria  um  vetor  inteiro  de  12  posições  com  valores aleatórios, 
entre 0-5 e imprima-o na tela.  Crie um segundo vetor, substituindo os valores iguais 3 por 7. 
Exiba o segundo vetor.*/

echo "Exercício 5: <br><br>";

$vetorNum1 = array();
$vetorNum2 = array();
$cont = 0;

echo "Valores do Vetor 1: <br>{";
while ($cont <= 10) {
    $numRdm = rand(0, 5);

    array_push($vetorNum1, $numRdm);
    $cont++;
}

for ($i = 0; $i <= 10; $i++) {
    if ($vetorNum1[$i] == 3) {
        array_push($vetorNum2, 7);
    } else {
        array_push($vetorNum2, $vetorNum1[$i]);
    }
    echo $vetorNum1[$i] . " ";
}
echo "} <br><br> Vetor com a substituição de 3 para 7: <br>{";

for ($i=0; $i <= 10; $i++) { 
    echo $vetorNum2[$i] . " ";
}
echo "}";