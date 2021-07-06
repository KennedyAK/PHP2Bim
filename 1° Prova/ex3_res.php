
<?php
$v = $_GET['valorinput'];

switch ($v) {
    case 'S':
    case 's':
        echo 'Solteiro ';
        break;
    case 'C':
    case 'c':
        echo 'Casado ';
        break;
    case 'd':
    case 'D':
        echo 'Divorciado ';
        break;
    case 'v':
    case 'V':
        echo 'Viúvo ';
        break;
    default:
        echo 'Estado Civil Inválido ';
        break;
}
echo '<hr><a href="e3.php">voltar</a>';
?>