<?php
// aula 10 - problemas muito ruins se a session nao for destruida

// Toda vez que a session é iniciada, atribui-se uma ID para referenciar apenas esta session
    session_start();
echo session_id(); // apresenta o id em hexadecimal
$_SESSION['senha']= 'info'; //criou uma variavel chamada senha na session e atribui o valor info
echo  '<br>';
var_dump($_SESSION);
session_destroy();
?>