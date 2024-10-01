<?php

//1 - Escreva um programa em PHP que exiba seu nome na tela.

$nome = "Kevyn\n";

echo "Meu nome é: $nome";

//2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

$nota1 = 8;
$nota2 = 7;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "A media de três notas foi: $media\n";

//3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

$valorMetros = 1000;
$valorCentimetros = $valorMetros * 100;

echo "O valor convertido de metros para centimetros é: $valorCentimetros\n";

//4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.\n";
} else {
    echo "$ano não é bissexto.\n";
}

//5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.

$valorCelsius = 40;
$valorFahrenheit = (($valorCelsius*9) / 5) + 32;

echo "A temperatura convertida de Celsius para Fahrenheit é: $valorFahrenheit\n";