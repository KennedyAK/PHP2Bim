<?php
$i = 6;
$a = 64;
?>
<html>

<head>
    <title>exercicio 05</title>
    <style>
    td, table{
        border: 1px solid #333;
        text-align: center;
        margin: auto;
        width: 300px;
    }

    </style>
</head>

<body>
    <p> exercicio 05: Um professor de matemática do IFMT deseja continuar a seguinte progressão abaixo até o valor 1000. Faça uma página PHP que mostre a quantidade da progressão e o valor da progressão: </p>
    Progressão 1 2 3 4 5 6 ..... 1000 <br>
    Valor 1 2 4 8 16 32 ..... ?
    <hr>

    <a href="index.php">voltar</a>

    <table>
        <tr>
            <td>Progressão</td>
            <td>Valor</td>
        </tr>
        <?php for ($i = 7; $i <= 1000; $i++) { ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <?php echo $a; ?>
                </td>
            </tr>
            <?php $a = ($a + $a); ?>
        <?php } ?>
    </table>
</body>

</html>