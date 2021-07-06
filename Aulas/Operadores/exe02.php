<?php 

// aula 04

//Operadores no geral, ou seja, os calculos matematicos basicos
$a = 10;
$b = 2;

echo 'Variavel A: ' . $a . '<br>' . 'Variavel B: ' . $b . '<br>'; // mostrar o valor das variaveis
// é importante que os calculos estejam entre parenteses pq pode dar erro em certos lugares/ferramentas

echo '<br>'; // a tag br do html funciona aqui tbm para quebrar linha
echo 'Soma: ' . ($a+$b) . '<br>'; 
echo 'Subtração: ' . ($a-$b) . '<br>';
echo 'Multiplicação: ' . ($a*$b) . '<br>';
echo 'Divisão: ' . ($a/$b) . '<br>';
echo 'Potência: ' . ($a**$b) . '<br>'; // a base é o A e o B seria o quantidade que estaria sendo elevado
echo 'Módulo: ' . ($a%$b) . '<br>'; // realiza o calculo e apresenta o resto da divisao
?>