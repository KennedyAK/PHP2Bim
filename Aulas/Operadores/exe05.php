<?php 

//aula 05 - incremento e decremento

$a = null;
$b = null;
$c = 100;

echo $a, $b,  $c; // assim pode apresentar algum valor em branco e dar erro
echo "<br>";

// é um seguro no cod, ira mostrar apenas a variavel que não estiver null
echo $a ?? $b ?? $c; // esse simbolo ignora os valores null

?>