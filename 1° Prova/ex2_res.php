<?php
    $cj = $_GET['valorinput'];
    if($cj != null){
        echo 'Salario Bruto: R$'.number_format($cj, 2, ',').'<br>';

        if($cj < 1000) {
            echo 'A taxa é 5%: R$'.number_format($imposto = $cj*0.05, 2, ',');
        }else if($cj >= 1000 && $cj <= 5000){
            echo 'A taxa é 11%: R$'.number_format($imposto = $cj*0.11, 2, ',');
        }else if($cj > 5000){
            echo 'A taxa é 35%: R$'.number_format($imposto = $cj*0.35, 2,',');
        }

        echo '<br>salario liquido: R$'.number_format($salarioliquido = $cj - $imposto, 2, ',').'<hr>';
    } else {
        echo 'Digite um Valor Valido. <hr>';
    }
    
    echo '<a href="e2.php">voltar</a>';
?>