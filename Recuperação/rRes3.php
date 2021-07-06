<html>

<head>
    <meta charset="UTF-8">
    <title>Exercicio 3 - Recuperação</title>
</head>

</html>
<?php

$tamP = $_GET['opcaoT'];
$qtdP = (int)($tamP * 100 / 45); // calculo feito em cm
$sobra = $tamP * 100 % 45; // encontrando a quantidade que sobrou

echo "Foram criadas $qtdP peças de 45cm X 45cm e; <br> sobrou um material de $sobra"."cm X 45cm.<br><br>";
echo "<b>OBS:</b> Estou considerando que as peças criadas tenham uma dimensão de 45cm por 45cm;<hr>";

echo '<a href="r3.php">Voltar</a>';
?>