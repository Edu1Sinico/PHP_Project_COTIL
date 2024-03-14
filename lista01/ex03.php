<?php
/* 3. Crie  um  script  em  PHP  que  cria  um  vetor  com  20  valores  aleatórios,  entre  0 - 5, 
 e  exiba-os  ao  usuário  juntamente  com  o  número  de  vezes  que  o  valor 3 aparece. 
 Obs: Utilize um laço while. */


echo "Exercício 3: <br><br>";
echo "Vetor com 20 elementos de 0 a 5: <br>{";
$cont = 0;
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
