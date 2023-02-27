<?
/*
2)Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores
 anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...),
  escreva um programa na linguagem que desejar onde, informado um número, 
  ele calcule a sequência de Fibonacci e retorne uma mensagem avisando 
  se o número informado pertence ou não a sequência.

*/

$num = 21; // número informado

$fibonacci = array(0, 1); // array com os dois primeiros valores da sequência
$i = 1;

while ($fibonacci[$i] < $num) {
  $fibonacci[] = $fibonacci[$i] + $fibonacci[$i-1]; // adiciona o próximo valor à sequência
  $i++;
}

if ($fibonacci[$i] == $num) {
  echo "$num pertence à sequência de Fibonacci.";
} else {
  echo "$num não pertence à sequência de Fibonacci.";
}