<html>

<head>
    <meta charset="UTF-8">
    <title>Exercicio 4 - Recuperação</title>
</head>

</html>
<?php

$nume1 = $_GET['num1'];
$nume2 = $_GET['num2'];
$contA = 1;
$contB = 0;
$f = null;

if ($nume1 >= $nume2 or $nume1 == null or $nume2 == null) {
    echo "Digite um valor válido <br>";
} else {
    for ($nume1; $nume1 <= $nume2; $nume1++) {
        echo "$nume1 ";
        if ($contA >= 10) {
            echo '<br>';
            $contA = 0;
        }
        $contA++;
        $contB++;
        if ($contB >= 20) break;
    }
}

echo '<br><b>OBS:</b> Estou considerando apenas as 2 linhas com 10 numeros cada;';
echo '<hr><a href="r4.php">Voltar</a>';
?>