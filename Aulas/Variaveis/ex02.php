<?php

$anoNasc = 1985;
$nome = 'Antonio';

// unset($anoNasc); //remove os valores das variaveis

if (isset($nome)) {
    echo $nome." "; // a contenctanação é com .
}
// se tiver algum valor na variavel, mostre-a

$sobrenome = 'kennedy';
$nomeCompleto = $nome." ".$sobrenome; // "contentanação" variavel nomeCompleto recebe as variaveis nome e sobrenome dando um espaço entre elas
echo $nomeCompleto;

 echo $anoNasc, " ",  $nome; // aqui eu fiz uma gambiarra pra fazer contentanação
?>