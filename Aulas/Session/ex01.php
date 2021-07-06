<?php
// aula 10 - session
// No PHP a session não é inicializada automaticamnente!

    session_start(); //tem que ligar a session toda vez que for usada
    $_SESSION["nome"] = 'Antonio'; // imagine que é uma variavel global, armazenada na session

    // A session é uma forma de salvar valore (variaveis) para serem sados ao longo da visita do usuário
    // Uso importantissimo
   
?>