<html>

<head>
    <meta charset="UTF-8">
    <title>Exercicio 5 - Recuperação</title>
</head>

</html>

<?php

$qtdD = $_GET['qtdD'];

if ($qtdD == null) {
    echo 'Digite um valor válido';
} else {

    $cont1 = null;
    $cont5 = null;
    $i = null;

    echo 'R$:' . number_format($qtdD, 2, ',') . '<br><br>';

    while ($i <= 10) {
        if ($qtdD - 50 >= 0) {
            $qtdD -= 50;
            $cont5++;
        } else if ($qtdD - 10 >= 0) {
            $qtdD -= 10;
            $cont1++;
        } else {
            break;
        }
    } //WHILE

    switch ($qtdD == 0) {
        case $qtdD == 0:
            echo ($cont5 != null) ? "$cont5 notas de 50 Reais;<br>" : "Nenhuma nota de 50 reais;<br>";
            echo ($cont1 != null) ? "$cont1 notas de 10 Reais;" : " Nenhuma nota de 10 reais;";
            break;
        default:
            echo 'Retirada não é compativel;';
            break;
    } // switch FILHO
} //if MASTER

echo '<hr><a href="r5.php">voltar</a>';
?>