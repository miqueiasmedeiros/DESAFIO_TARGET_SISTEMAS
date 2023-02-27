<?php

/*
Dado um vetor que guarda o valor de faturamento diário de uma distribuidora,
faça um programa, na linguagem que desejar, que calcule e retorne:
	• O menor valor de faturamento ocorrido em um dia do mês;
	• O maior valor de faturamento ocorrido em um dia do mês;
	• Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

IMPORTANTE:
	a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
	b) Podem existir dias sem faturamento, como nos finais de semana e feriados.
     Estes dias devem ser ignorados no cálculo da média;
*/ 


// Lê o arquivo JSON contendo os valores de faturamento diário
$json = file_get_contents('faturamento.json');
$data = json_decode($json, true);

// Inicializa as variáveis para os cálculos
$menor = $data[0];
$maior = $data[0];
$soma = 0;
$dias_acima_media = 0;
$media = 0;

// Percorre o vetor de faturamento diário
foreach ($data as $valor) {
    if ($valor < $menor) {
        $menor = $valor;
    }
    if ($valor > $maior) {
        $maior = $valor;
    }
    $soma += $valor;
}

// Calcula a média, ignorando os dias sem faturamento (valor igual a zero)
$num_dias = count(array_filter($data));
if ($num_dias > 0) {
    $media = $soma / $num_dias;
}

// Conta os dias em que o faturamento diário foi superior à média
foreach ($data as $valor) {
    if ($valor > $media && $valor > 0) {
        $dias_acima_media++;
    }
}

// Exibe os resultados
echo "Menor valor de faturamento: R$ " . number_format($menor, 2, ',', '.') . "\n";
echo "Maior valor de faturamento: R$ " . number_format($maior, 2, ',', '.') . "\n";
echo "Número de dias com faturamento acima da média mensal: " . $dias_acima_media . "\n";
?>
