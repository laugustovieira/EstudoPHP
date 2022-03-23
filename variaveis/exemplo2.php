<?php
//comentário para identicar o que significa esta variável
$anoNascimento = 1979;

/* outra forma de comentar é utilizando 
   fdesta forma, para comentar mais de uma linha
*/

$nome = "Luiz Augusto";

$sobrenome = "Vieira Pinto";

//concatenar variaveis strings
$nomeCompleto = $nome . $sobrenome;

echo $nomeCompleto;

exit;

echo "<br/>";

//retira a variavel da memoria.
unset($nome);

if(isset($nome)){
echo $nome;
}

?>