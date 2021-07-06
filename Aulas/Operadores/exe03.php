<?php

// aula 05

//Operadores lógicos, ou seja, são aqueles que fazem comparação.. se é maior ou menor
// é a mesma coisa do if do java mas com sintaxe diferente

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$a = 100; // valor inteiro
$b = 100.00; // valor double ou

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

//se o valor de A for maior que B
var_dump($a > $b); //faz uma comparação.. 
//e de acordo com a condição, ele ira apresentar false
//pq o valor de A e B sao iguais
echo '<Br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

//se o valor de A for menor que B
var_dump($a < $b);
echo '<Br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*se o valor de A for igual que B

var_dump($a = $b); // esta sendo atribuito a A o valor de B.. 
e de acordo com a condição, ele ira apresentar float que é o tipo do dado*/

var_dump($a == $b); // forma correta da condição de igual e retornara true ou false
echo '<br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

// se o TIPO do valor de A é igual a B
var_dump($a === $b); // verifica se o tipo de dado das variaveis são iguais, se os 2 sao string ou double...
echo '<br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

//se o valor de A é diferente de B
var_dump($a != $b); // esse ponto de exclamação representa negação
echo '<br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

// se o TIPO do valor de A é diferente do tipo do valor de B
var_dump($a !== $b); // verifica o tipo de dado das variaveis são diferentes, se os 2 sao string ou double...
echo '<br>';
?>