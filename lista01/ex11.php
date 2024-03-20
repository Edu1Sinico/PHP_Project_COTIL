<?php

/* 11. Crie um script que identifique e exiba se o usuário está usando um dos seguintes
navegadores: Firefox, Chrome, Safari ou IE. Caso contrário informe ”Navegador
desconhecido!”. Obs: Utilize uma estrutura switch*/

// Obter informações sobre o navegador

echo "Exercício 11: <br><br>";

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$valor = 0;

// Verificar o navegador usando preg_match()
if (preg_match('/Chrome|Chormium/', $userAgent)) {
    $valor = 1;
} else if (preg_match('/Edge|Microsoft Edge/', $userAgent)) {
    $valor = 2;
} else if (preg_match('/Firefox/', $userAgent)) {
    $valor = 3;
} else if (preg_match('/Safari/', $userAgent)) {
    $valor = 4;
} else {
    $valor = 0;
}

switch ($valor) {
    case 1:
        echo 'O usuário está usando o Chrome.';
        break;
    case 2:
        echo 'O usuário está usando o Edge.';
        break;
    case 3:
        echo 'O usuário está usando o Firefox.';
        break;
    case 4:
        echo 'O usuário está usando o Safari.';
        break;
    default:
        echo "Navegador desconhecido.";
        break;
}
