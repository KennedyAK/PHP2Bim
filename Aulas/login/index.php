<html>
<!--aula 08 - sistema de login com HTML e PHP-->

<head>
    <title>Sistema de Login</title>
</head>
    <body>
        <form method="post">
            <fieldset>
               <table>
                   <tr>
                       <td>
                           <h3>Sistema de Login</h3>
                     </td>
                    </tr>
                    <tr>
                        <td>Login</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="cpLogin">
                        </td>
                    </tr>
                    <tr>
                       <td>Senha</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name=cpSenha>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Entrar">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="reset" value="Limpar">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
<?php

    if(isset($_POST['cpLogin'])){ // isset - verifica se houve alteração nos inputs (campos de entrada)

        // (lin=52) captura os valores nos inputs e verificar se o login esta = adm e se a senha esta = 123
        if($_POST['cpLogin'] == 'adm' && $_POST['cpSenha'] == '123'){
            header("Location: principal.php");

        }// if get cplogin
    }//if isset
?>