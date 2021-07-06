<html>

<head>
    <title>exercicio 02</title>
</head>

<body>
    <p> exercicio 02: Faça uma pagina PHP com HTML que solicite ao usuario o salario bruto e 
    apresente em outra nova tela, o valor lido do salario bruto, o salario líquido e o imposto 
    a pagar seguindo a seguinte regra:</p>
        salario Menor que R$1.000,00 tem Taxa 5%;<br>
        salario de R$1.000,00 a R$5.000,00 tem Taxa 11%;<br>
        salario Maior que R$5.000,00 tem Taxa 35%;<hr>

    <form action="ex2_res.php">
        salario<input type="number" min="1" name="valorinput">
        <input type="submit">
    </form>

    <a href="index.php">voltar</a>
</body>

</html>