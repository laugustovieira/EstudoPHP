<?php
$nome = "HCode";

$nome2 = 'Treinamentos';

echo var_dump($nome, $nome2);

echo "<br>";

//aspas duplas faz interpolação de variavel
echo "ABC $nome";

echo "<br>";

//nao substitui a variavel pelo valor
echo 'ABC $nome';

echo "<br>";
?>