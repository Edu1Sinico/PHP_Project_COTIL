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