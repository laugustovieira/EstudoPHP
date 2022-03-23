<?php
//pega a variavel da url (uniform resource locator)
//http://localhost/cursophp/variaveis/exemplo4.php?a=teste

$nome = $_GET["a"];

var_dump($nome);

$nome = (int)$_GET["a"];

var_dump($nome);

$numero = (int)$_GET["b"];

var_dump($numero);

//VARIAVEIS SUPER GLOBAIS. IMPORTANTE PARA GERAÇÃO DE LOG

//pegar o ip do ususario (quando executado no localhost fica ::1)
$ip = $_SERVER['REMOTE_ADDR'];

echo "ip : " . $ip;

$paginaAcessada = $_SERVER['SCRIPT_NAME'];

echo "Página Acessada : " . $paginaAcessada;


	?>