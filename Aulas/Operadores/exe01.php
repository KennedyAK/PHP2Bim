<?php

//aula 04 

$valorTotal = 10;
$valorTotal = $valorTotal + 100; // acumulador de dados
$valorTotal += 50; // é a mesma coisa da linha acima, 10+100+50= 160

$valorTotal -= 10; // redutor
//$valorTotal =-10; // não é redutor, na verdade vc estaria atribuindo o valor -10 a esta variavel

echo $valorTotal;
echo "<br>";

$aluno = 100;
$aluno *= .9; // apresenta apenas 90 por cento do valor
echo $aluno;
echo "<br>";

//descontos financeiros
$compra = 100.50;
//$vista = $compra * 0.1; // na verdade isso seria um desconto e nao o valor a vista
$desconto = $compra * 0.1; // o que muda aqui é apenas o nome que na verdade é o desconto
//$vista = $compra - $desconto; // esse sim seria para mostrar o valor a vista
$vista = $compra - $compra * 0.1; // mesma coisa das linhas acima, mas de um jeito mais rapido "primeiro multipla"
echo $vista;
echo "<br>";

//juros financeiros
$divida = 1000.00;
$pagar = $divida + $divida * 0.05; // juros de 5 porcento 
echo $pagar;
?>