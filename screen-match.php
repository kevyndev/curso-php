<?php

echo "Bem vindo ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor - Ragnarok";
$nomeFilme = "Se beber não case";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$somaNotas = 0;

for ($contador = 1; $contador < $argc ; $contador++) {
    $somaNotas += $argv[$contador];
}

$notaFilme = $somaNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: " . $nomeFilme . " \n";
echo "Nota do Filme: $notaFilme\n";
echo "Ano de Lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo("Esse filme é um lançamento\n");
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo("Esse filme ainda é novo\n");
} else {
    echo("Esse filme não é um lançamento\n");
}

$genero = match ($nomeFilme) {
     "Top Gun - Maverick"=> "ação",
     "Thor - Ragnarok"=> "super-heroi",
     "Se beber não case"=> "Comédia",
    default => "genero desconhecido"
};

echo("O genero do filme é $genero\n");