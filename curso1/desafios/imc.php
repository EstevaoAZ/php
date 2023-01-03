<?php

$peso = 90;
$altura = 1.80;
$imc = $peso / $altura ** 2;

echo "Seu imc é: $imc. Você está ";

if ($imc < 18) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";
