<?php

/*
4) Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:

	SP – R$67.836,43
	RJ – R$36.678,66
	MG – R$29.229,88
	ES – R$27.165,48
	Outros – R$19.849,53

Escreva um programa na linguagem que desejar
onde calcule o percentual de representação
que cada estado teve dentro do valor total 
mensal da distribuidora.
*/



// Definir os valores de faturamento de cada estado
$valores_estados = array(
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
);

// Calcular o valor total mensal da distribuidora
$total_mensal = array_sum($valores_estados);

// Calcular o percentual de representação de cada estado
foreach ($valores_estados as $estado => $valor) {
    $percentual = round(($valor / $total_mensal) * 100,2);
    echo "$estado - $percentual% " . PHP_EOL;
}

?>