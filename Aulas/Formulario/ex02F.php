<<!--
aula 07 - foreach e formulario
OBS: para funcionar os input do html precisam estar em um tag form e de um atributo name
-->
    form>
   Nome: <input type="text" name="cpNome"><br>
   Data Nascimento: <input type="date" name="cpData"><br>
   <input type="submit" value="Cadastrar">
</form>

<?php
    if(isset($_GET)){ //get é um vetor pq armazena tudo
    //verifica com o "isset" se os inputs não estão null (vazio) 
        foreach ($_GET as $id => $valor){
            echo 'Identificação do campo: '.$id.'<br>';
            //OBS: se nao quiser mostrar o nome do campo basta tirar o echo (lin=14)
            echo 'Valor do campo: '.$valor;
            echo '<hr>';
        }// final foreach
    } //finall do isset
?>
