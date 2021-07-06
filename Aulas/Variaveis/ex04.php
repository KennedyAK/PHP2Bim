<?php 

    // iremos acessar esta pagina pelo navegador informando um valor como parametro
    // http://localhost/variaveis/ex04.php?login=123&senha=1234
    // obs: a pagina so vai rodar se acrescentar os parametros login=123&senha=1234

    $log = $_GET["login"]; // chama um parametro que seria ? login=123 & senha=1234
    $sen = $_GET["senha"]; // obs: o get tem que ser maiusculo

    var_dump("$log");
    echo nl2br("\n");
    var_dump($sen);
?>