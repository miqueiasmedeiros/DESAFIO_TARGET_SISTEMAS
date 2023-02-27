<?php
//5) Escreva um programa que inverta os caracteres de um string.

// SEM FUNÇÃO

$string = "Hello, world!";
$inverte_string = "";
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $inverte_string .= $string[$i];
}
echo $inverte_string;

// COM FUNÇÃO

// $string = "Hello, world!";
// $inverted_string = strrev($string);
// echo $inverted_string;
