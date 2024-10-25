<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";

echo "Bem-Vindo(a) ao ScreenMatch \n";

$filme = new Filme(
    "Thor - Ragnarok",
    2021,
    Genero::SuperHeroi,
    180
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie("Lost",2007,Genero::Drama,1,2,3);

echo $serie->anoLancamento;