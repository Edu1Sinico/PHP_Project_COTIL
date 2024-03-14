<?php

$frase = "essa e a melhor turma de DS do COTIL.";
$cont = 0;

echo "Texto original: <br>\n$frase<br>";
function strCap($str)
{
    $str[0] = strtoupper($str[0]);
    for ($n = 1; $n < strlen($str) - 1; $n++) {
        if ($str[$n] == " ") {
            $n++;
            $str[$n] = strtoupper($str[$n]);
        }
    }
    return $str;
}

function strRevert($str)
{
    for ($n = strlen($str); $n >= 0; $n--) {
        $strInv = $str[$n];
        $cont--;
    }
    return $strInv;
}

$frase = strCap($frase);
$fraseInvertida = strRevert($frase);

echo "Texto com as letras iniciais maisculas: <br>\n$frase<br>";
echo "Texto invertido: <br>\n$fraseInvertida<br>";