<?php
$frase = "Amanhã vai ser um novo dia";

$q = strpos($frase, "um");

$texto = substr($frase, 0, $q);

$texto2 = substr($frase,$q, strlen($frase));

var_dump($q) ;

echo "<br>";

var_dump($texto);

echo "<br>";

var_dump($texto2);

//mais metodos
//https://www.php.net/manual/pt_BR/language.types.string.php

?>