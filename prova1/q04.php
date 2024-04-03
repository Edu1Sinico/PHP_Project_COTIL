<?php
echo "<h1>Questão - 4</h1>";

$aAlunos = array(
    "201345" => "Marco Antonio Felicio",
    "208374" => "Maria Clara Minosi",
    "203498" => "Justino Justus" 
);

$aRa = array(
    "201345",
    "208374",
    "203498"
);

foreach ($aAlunos as $key => $aRa[]) {
    echo 
    "<ul> 
        <li>Nome: " . $aAlunos[$key] . " - RA: " . $key . "</li>
    </ul>";
}