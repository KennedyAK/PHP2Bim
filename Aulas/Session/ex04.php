<?php
// aula 10 - problemas muito ruins se a session nao for destruida

session_id('h9n2mgans2gnkiifb8sd3hrkir'); //id da session 
session_start(); // session inicializada
session_regenerate_id(); // id da session restauarada
echo '<br>.';
var_dump($_SESSION); // apresenta o valor da session que foi restaurada
?>