<?php
$nome = "luiz Augusto vieira";

echo $nome . "<br>";
//coloca tudo em maiusculo
echo strtoupper($nome) . "<br>";
//coloca tudo em minusculo
echo strtolower($nome) . "<br>";
//coloca toda primeira letra em maiusculo
echo ucwords($nome). "<br>";
// coloca somente a primeira letra da strinf em maiusculo
echo ucfirst($nome). "<br>";
//trocar uma letra por outra
$nome = str_replace("u", "w", $nome);
echo $nome;



?>