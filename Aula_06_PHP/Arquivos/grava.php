<?php

$filename = "dados.dat";
echo "Digite um texto na URL: <br><br>";

try {
    if (isset($_GET["texto"])) {
        
        $text = $_GET["texto"];
        if (!$handle = fopen($filename, 'a')) {
            echo "Não foi possível abrir o arquivo ($filename)";
            exit;
        }
        if (fwrite($handle, $text) === FALSE) {
            echo "Não foi possível escrever no arquivo ($filename)";
            exit;
        }
        echo "Sucesso!!!";
        fclose($handle);
    } else {
        echo "<br>Por favor, digite o texto na url.<br>";
    }
} catch (Exception $e) {
    echo "<br><hr>Erro Inesperado.<br>";
}
