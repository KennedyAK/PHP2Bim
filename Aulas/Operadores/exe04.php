<?php

//aula 5 - funcao if

$x = 100;
$y = 40;

// se ovalor de X é menor, igual ou maior;
// -1 = menor
// 0 = igual
// 1 = maior

var_dump($x <=> $y); // são 3 tipos de comparação em um
// se fosse no java seria pelo menos umas 8 linhas de codigo

    $resultado = $x <=> $y;

    if($resultado == -1)
        echo 'X é menor que Y';
    else if ($resultado == 0)
        echo 'X é igual a Y';
    else if ($resultado == 1)
        echo 'X é maior que Y';

    // existem outras maneiras de fazer essa comparação mas essa é a mais tranquila
?>