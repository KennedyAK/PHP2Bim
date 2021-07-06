<?php
// Aula 06 - laços de repetição

for($i=0; $i <= 10 ; $i++){
    //inicia a variavel i valendo 0, dps da uma condicao e realiza um incremento no laco
    echo $i.'<br>'; // apresenta o valor de i a cada repeticao do laco
}

echo '<br> Repetição de 0 a 1000 de 5 em 5 <br>';
for($a = 0; $a <= 1000; $a += 5){
    //inicia a variavel a valendo 0, dps da uma condicao e realiza um incremento no laco de 5 em 5
    if ($a >= 200 && $a <= 800) continue; // && é um operador lógico para comparacao
    // cria um intervalo entre 200 e 800 e nao ira exibir o valor
    if ($a === 900) break; // quando a variavel A valer 900 ira parar o laco

    echo $a.'<br>';
}

?>