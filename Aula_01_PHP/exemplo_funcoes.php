<?php
    $qualTab = $_GET["qTab"]; // Cria uma variável e puxa pela URL através do método $_GET
    tabuada($qualTab); // Chama a função da tabuada

function tabuada($qt){ //
    for($n = 1; $n <=10; $n++)
    {
        echo "<p>$n * $qt = ", ($n*$qt), "</p>";
    }

    function calcula($a, $b)
    {
        return $a*$b;
    }

}