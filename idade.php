<?php

echo "1. Digite um numero: ";
$ValorRecebido = trim(fgets(STDIN));

$qtdDias  = $ValorRecebido;

$ano   = floor($dias / 365); 
$meses = floor(($dias % 365) / 30);
$dias = floor(($dias % 365) % 30);

echo "\n A quantidade de anos é: ". $ano;
echo "\n A quantidade de meses é: ". $meses;
echo "\n A quantidade de dias é: ". $dias;


