<?php
// Array sequencial
$aExemplo = array(18101, 3, "José Alberto Matioli");
echo $aExemplo[0] . " - " . $aExemplo[2];
$aExemplo[2] = "J. A. Matioli";
echo "<br>";
echo $aExemplo[0] . " - " . $aExemplo[2] . "<br><br>";

// ------------------------------------------------------

// Array associativo
$aExemplo1 = array("ra" => 201115, "serie" => 4, "nome" => "Eduardo Silva Sinico");

echo $aExemplo1["ra"] . " - " . $aExemplo1["nome"];
$aExemplo1["nome"] = "E. S. Sinico";
echo "<br>";
echo $aExemplo1["ra"] . " - " . $aExemplo1["nome"] . "<br><br>";

// ------------------------------------------------------

// Array multidimensional
$aExemplo2 = array(
    "ra" => 201389,
    "serie" => 4,
    "aluno" => array(
        "nome" => "Lorenzo ",
        "sobrenome" => " Ochiuzzi"
    )
);
echo $aExemplo2["ra"] . " - " . $aExemplo2["aluno"]["sobrenome"];
