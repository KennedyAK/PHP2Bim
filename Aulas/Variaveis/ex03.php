<?php

//tipos de dados básicos
$ano = 1990; // inteiro
$salario = 100000.99; //decimal
$status = false; //booleano
echo nl2br($ano."\n"); // O echo é usado para visualizar variaveis com dados basicos

/* 
TIPOS DE DADOS COMPOSTOS
Conceito: aqueles que vao armazenar mais de uma    
informação em uma posicao como por exemplo o vetor 
*/

$frutas = array('abacaxi', 'laraja', 'manga'); //vetor homogeneo, ou seja, um tipo de dado apenas, neste caso o string
echo nl2br("$frutas[0] \n"); // exibe a 1° posição do vetor

$hoje = new DateTime(); // é uma função pronta do php
var_dump($hoje); 

$voto = null; // "vazia" nem foi inicializada, ou seja, não ocupou um espaço na memória
$voto2 = " "; //iniciada vazia, porém, reservou um espaço na memória

echo nl2br("\n voto 1 esta: ".$voto);
echo nl2br("\n voto 2 esta: ".$voto2);


?>