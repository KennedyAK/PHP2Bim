<?php

    $diaSemana = date("w"); // w = week - refere-se ao dia da semana 0 - 6 de acordo com a data do servidor
        echo $diaSemana;
        echo '<br><br>';

    switch($diaSemana){ 
        // necessita do break pq nao se nao executa tudo rs.. e nao da pra trabalhar com intervalo
        case 0:
            echo 'Domingo';
        break;
        case 1:
            echo 'Segunda-Feira';
        break;
        case 2:
            echo 'Terça-Feira';
        break;
        case 3:
            echo 'Quarta-Feira';
        break;
        case 4:
            echo 'Quinta-Feira';
        break;
        case 5:
            echo 'Sexta-Feira';
        break;
        case 6:
            echo 'Sábado';
        break;
        default: // o default é util quando a condicao nao entra em nenhuma dos outros casos
            echo 'Data inválida';
        break;
        } // final do switch

?>