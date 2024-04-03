<?php

try {
    $filename = "dados.dat";

    if (!$handle = fopen($filename, 'a')) {
        echo "Não foi possível abrir o arquivo ($filename)";
        exit;
    } else {
        $handle = fopen($filename, "r");
        if ($handle != null) {
            $conteudo = fread($handle, filesize($filename));
            echo $conteudo;
            fclose($handle);
        } else {
            echo "O conteúdo do arquivo está vazio.";
        }
    }
} catch (Exception $e) {
    echo "<br><hr>Erro Inesperado.<br>";
}
