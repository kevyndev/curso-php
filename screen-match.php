<?php

function exibeMensagemLancamento (int $ano): void {

    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem vindo ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor - Ragnarok";
$nomeFilme = "Se beber não case";

$anoLancamento = 2017;

$quantidadeDeNotas = $argc - 1;
$somaNotas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $somaNotas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($somaNotas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do Filme: " . $nomeFilme . " \n";
echo "Nota do Filme: $notaFilme\n";
echo "Ano de Lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
     "Top Gun - Maverick"=> "ação",
     "Thor - Ragnarok"=> "super-heroi",
     "Se beber não case"=> "Comédia",
    default => "genero desconhecido"
};

echo "O genero do filme é $genero\n";

$filme = [
    "nome" => "Thor - Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-heroi",
];

echo $filme["ano"];