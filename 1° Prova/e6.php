<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 06</title>
    <style>
        div {
            margin-left: 20rem;
            width: 80px;
            text-align: center;
        }

        p{
            border-bottom: 1px solid #c1c1c1;
        }
    </style>
</head>

<body>
    <span> exercicio 06: o mesmo professor de matemática, gostaria de verificar a exibição de todos
        os números primos de 1 a 1000 e também a soma de todos esses números. Faça uma página em PHP
        que mostre os números primos em cada linha e no final a somatória deles. </span>
    <hr>

    <a href="index.php">voltar</a>
</body>

</html>
<?php
$cont = null;
$somaP = null;
$lin = 1;

echo '<div>';
for ($i = 1; $i <= 1000; $i++) {

    for ($x = 1; $x <= $i; $x++) {
        if ($i % $x == 0)
            $cont++;
    }

    if ($cont == 2) {
        echo '<p>' . $lin . '° -- &nbsp;' . $i . '</p>';
        $somaP += $i;
        $lin++;
    }
    $cont = null;
}
echo "</div>A soma de todos os numero Primos é: $somaP";
?>