<?php
/* 1. Crie  um  script  que  apresente  o  número  de  dias  que  já  
se  passaram  desde  o  início do ano corrente (01/01/2024, 0h).  
Obs:  Utilize a função date.*/

$data1 = mktime(0, 0, 0, 01, 01, 2024);
$data2 = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
$dataInicial = date("01/01/2024");
$dataAtual = date("d/m/Y");

echo "Exercício 1: <br><br>";
echo "Data de início do ano: " . $dataInicial . "<br>Data do dia atual: " . $dataAtual . "<br><br>";
echo "Diferença de dias entre essas duas dastas: " . ($data2 - $data1) / 60 / 60 / 24;

echo "<br><br><hr><br>";

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
$cont = 0;

echo "<br><br><hr><br>";

/* 3. Crie  um  script  em  PHP  que  cria  um  vetor  com  20  valores  aleatórios,  entre  0 - 5, 
 e  exiba-os  ao  usuário  juntamente  com  o  número  de  vezes  que  o  valor 3 aparece. 
 Obs: Utilize um laço while. */


echo "Exercício 3: <br><br>";
echo "Vetor com 20 elementos de 0 a 5: <br>{";
$vetorArray = array();
$contVerificar = 0;

while ($cont <= 20) {
    $numRdm = rand(0, 5);
    array_push($vetorArray, $numRdm);

    if ($numRdm == 3) {
        $contVerificar++;
    }
    $cont++;
}

$cont = 0;

for ($i = 0; $i <= 20; $i++) {
    echo $vetorArray[$i] . " ";
}
echo "} <br><br>Quantidade de vezes que o nº3 aparece: $contVerificar";

echo "<br><br><hr><br>";

echo "Exercício 4: <br><br>";

/* 4. Crie um script em PHP que cria dois vetores de 10 posições preenchidos com valores aleatórios 
e faça a soma dos elementos de mesmo índice, colocando o resultado em  um  terceiro  vetor. 
 Exiba os 3  vetores,  um  após  o  outro.  Obs:  Utilize um laço for */

$vetorNum1 = array();
$vetorNum2 = array();
$vetorResult = array();

echo "Valores do Vetor 1: <br>{";
while ($cont <= 10) {
    $numRdm = rand(0, 100);
    $numRdm2 = rand(0, 100);

    $array_push($vetorNum1, $numRdm);
    $array_push($vetorNum2, $numRdm2);

    $cont++;
}

for ($i = 0; $i <= 10; $i++) {
    $array_push($vetorResult, $vetorNum1[$i] + $vetorNum2[$i]);
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




echo "<br><br><hr><br>";

echo "Exercício 5: <br><br>";