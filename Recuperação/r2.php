<html>

<head>
    <meta charset="UTF-8">
    <title>Exercicio 2 - Recuperação</title>
</head>

</html>
<?php

$dedicar_se = 100 / 6; //1h40 transformados em minutos e dividido por 6 disciplinas
$cont = (24 * 60) - 100; //calculo feito em minutos
$descansar =  $cont / 60; // resultado transformado em horas

echo    " &nbsp; O estudante do IFMT tem que dedicar " . number_format($dedicar_se, 1, 'min e ') .
    "seg para cada disciplina. <br> &nbsp; Obtendo então " .
    number_format($descansar, 2, 'h e ') . "min de tempo livre. <hr>";

echo '<a href="index.php">voltar</a>';
?>