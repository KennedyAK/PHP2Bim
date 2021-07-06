<?php
// aula 10 - session

    session_start(); //tem que ligar a session toda vez que for usada
    echo $_SESSION["nome"];

    //session_destroy(); //util no botão logoff, botao sair.. ele destroi ou apaga o conteudo da session
?>