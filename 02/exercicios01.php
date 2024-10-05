<?php

//1 - Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2, 
        'multiplicação' => $numero1 * $numero2,
    };
}

echo operacaoMatematica(10,10, "multiplicação");

function soma (int $num1, int $num2, string $texto): int {
    return $num1 + $num2 + $texto;
}

echo soma($num1 = 10, $num2 = 10, $texto = "20");
echo "\n";

//2 - Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function calcularImc (int $peso, float $altura): float {
    return $peso / ($altura * $altura);
}

echo calcularImc(70, 1.70);
echo "\n";

//3 - Crie uma função em PHP que converta graus celsius para Fahrenheit.

function temperatura (int $celsius): int {
    return $fahrenheit = (($celsius*9) / 5) + 32;
}

echo temperatura(40);