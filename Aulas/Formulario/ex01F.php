<?php
// aula 07 - foreach 

 $meses = array("Janeiro", "Fevereiro", "Março"); //vetor

 foreach($meses as $index => $mes) { 
//EXPLICAÇÃO: foreach($nomedoVetor as $posicao => $valorCadaPosicaO). (as e =>) significar extrair alguma coisa
    echo 'indice: '.$index.'<br>';
    echo 'Mês: '.$mes.'<br><br>';
 } //final do foreach

?>
