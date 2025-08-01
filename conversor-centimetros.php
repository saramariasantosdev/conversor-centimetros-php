<?php
//Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

fwrite(STDOUT, "Digite a distância em metros: ");

$metros = trim(fgets(STDIN));

$conversorCentimetros = $metros * 100;

echo "Resultado da conversão: $conversorCentimetros";
