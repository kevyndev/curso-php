<?php

//1 - Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$arquivo = fopen("teste.txt", "r");
$primeiraLinha = fgets($arquivo);
echo $primeiraLinha;
fclose($arquivo);


//2 - Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$nomeArquivo = "teste.txt";
$novaFrase = "\nPHP é incrivel!";

// Abre o arquivo para escrita no final
$arquivo = fopen($nomeArquivo, "a");
// Escreve no arquivo
fwrite($arquivo, $novaFrase);
// Fecha o arquivo
fclose($arquivo);

//3 - Crie um programa que converta a string '{"nome":"Kevyn","anoNascimento":2000,"profissao":"Dev"}' em um objeto.

$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

var_dump(json_decode($stringJson, true));
