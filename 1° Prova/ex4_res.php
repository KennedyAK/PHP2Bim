<?php $i = $_GET['valorinput']; ?>

<html>

<head>
    <title> exercicio 04</title>
    <style>
    td, table{
        border: 1px solid #333;
        text-align: center;
        margin: auto;
        width: 110px;
    }
    </style>
</head>

<body>

    <?php if ($i != null && $i <= 1000) { ?>
        <a href="e4.php">voltar</a><br>

        <table>
            <?php for ($i; $i <= 1000; $i++) { ?>
                <?php if ($i % 3 != 0) { ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                    </tr>
                <?php }
                continue ?>
            <?php } ?>
        </table>
    <?php } else { ?>
        <?php echo 'Insira um Valor Válido' ?>
    <hr><a href="e4.php">voltar</a>
        
    <?php } ?>
</body>

</html>