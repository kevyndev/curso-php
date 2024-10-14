<?php

require __DIR__ . "/funcoes.php";

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

var_dump($somaNotas);
sort($somaNotas);
var_dump($somaNotas);
$menorNota = min($somaNotas);
echo $menorNota;

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'],'-');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);

file_put_contents(__DIR__ . "/filme.json", $filmeComoStringJson);