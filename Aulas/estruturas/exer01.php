<?php
    $suaIdade = 17;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeIdoso = 65;

    //aninhamento ou estrutura de controle encadeada
    if($suaIdade < $idadeCrianca)
        echo 'Criança';
    else if ($suaIdade < $idadeMaior)
        echo 'Adolescente';
    elseif ($suaIdade < $idadeIdoso){
        echo 'Adulto';
    }
    else
        echo 'Veinho';
// se o aninhamento nao for feito "else if", todos os if serao executados ao mesmo tempo

        echo '<br>';

    //estrutura de controle ternário
    echo ($suaIdade < $idadeMaior)? 'Menor de idade' : 'Maior de idade'; //(condição lógica)? true : false

?>