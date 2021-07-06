<!-- Aula 09 - estrutura html e logica com o php-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Tabuada HTML com PHP</title>
</head>

    <body>
        <form>
         <h3>Exercicio 01 - Tabuada HTML com PHP</h3>
            <p>Faça uma página usando HTML com PHP para que o usuário entre com um número. <br> Uma nova tela deverá ser aberta com o resultado de uma tabela do 0 ao 10. <br> Use uma tabela para exibir esse resultado.</p> <br>
            <span>Informe um Número: </span>
            <input type="number" name="cpNum">
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar">


            <br><br>
            <hr>
            <a href="index.php">Voltar</a>
        </form>
    </body>
</html>

<?php
if(isset($_GET['cpNum'])){ // verifica se houve uma entrada

    // 1 opção - extraindo o valor do campo e passando como uma variavel na session php
    session_start(); //session iniciada
    $_SESSION['n'] = $_GET['cpNum'];
    header("Location: ex1_res.php"); 

    /* 2 opção 
    extraindo o valor do campo e passando como uma variavel PHP
    if($_GET['cpNum'] >= 0){
        $num = $_GET['cpNum']; 
        header("Location: ex1_res.php?n=".$num); 
        //coloca o valor da variavel php em um parametro html para redirecionar a outra pagina

        //paramentro em html é apenas ? e inventar qualquer valor e é sempre string
    }// final if get 

    OBS: O uso de session é mais recomendado por ser mais pratico e leve
    */

    }// final if isset
    //concatenação
?>