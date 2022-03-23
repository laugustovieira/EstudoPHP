<?php
//include "inc/exemplo1.php";
include_once "inc/exemplo1.php";
$resultado = soma(20,10);
echo $resultado;

// requere obriga que o arquivo exista
//include quando não existe tenta buscar de um servidor configurado no ini
// ou até de outro dominio.

// inlcude_once e require_once garantem que o codigo será incluido uma ínuca vez.

//melhor usar requere_once

?>

