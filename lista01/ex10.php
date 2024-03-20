<?php

/* 10. Crie uma função que receba um array chamado alunos que contenha o nome e
duas notas (N1 e N2) de cada aluno e calcula a media (N1+2*N2)/3 e retorna um array
contendo o nome e a média dos alunos aprovados. Seu script deve exibir a lista dos
aprovados em ordem alfabética com as médias finais.*/

echo "Exercício 10: <br><br>";

function calcular_media_aprovados($alunos)
{
    $aprovados = array();

    foreach ($alunos as $aluno) {
        $nome = $aluno['nome'];
        $n1 = $aluno['n1'];
        $n2 = $aluno['n2'];
        $media = ($n1 + 2 * $n2) / 3;

        if ($media >= 6) {
            $aprovados[$nome] = $media;
        }
    }

    // Ordenar o array de aprovados em ordem alfabética pelo nome do aluno
    ksort($aprovados);

    return $aprovados;
}

// Exemplo de array de alunos
$alunos = array(
    array('nome' => 'João', 'n1' => 7, 'n2' => 8),
    array('nome' => 'Maria', 'n1' => 6, 'n2' => 7),
    array('nome' => 'Pedro', 'n1' => 5, 'n2' => 6),
    array('nome' => 'Ana', 'n1' => 8, 'n2' => 9),
    array('nome' => 'José', 'n1' => 4, 'n2' => 5)
);

// Chamada da função para calcular e exibir os alunos aprovados
$aprovados = calcular_media_aprovados($alunos);

echo "Alunos Aprovados:<br><br>";
foreach ($aprovados as $nome => $media) {
    // Formatar a média com pelo menos uma casa decimal
    $media_formatada = number_format($media, 1);
    echo "$nome: $media_formatada<br>";
}
