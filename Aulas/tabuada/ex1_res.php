<!-- Aula 09 - tabela da tabuada com html e logica utilizando o php
    OBS: o php pode ser inicializaado em qualquer parte do html, mas recomenda-se
nao abrir ele no meio-->

<?php
// capturei o valor do parametro html, converti em int e atribui em uma varivel php(num1)
session_start();
$num1 = (int)$_SESSION['n'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 - Resultado Tabuada</title>
</head>

<body>
    <h3>Ex1 - Resultado Tabuada</h3>
    <table border="1">
        <tr>
            <th>
                N1
            </th>
            <th>
                X
            </th>
            <th>
                N2
            </th>
            <th>
                Resultado
            </th>
        </tr>
        <?php for ($i = 0; $i <= 10; $i++) { ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    X
                </td>
                <td>
                    <?php echo $num1; ?>
                </td>
                <td>
                    <?php echo $i * $num1; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br><br>
    <hr>
    <a href="ex1.php">Voltar</a>
</body>

</html>