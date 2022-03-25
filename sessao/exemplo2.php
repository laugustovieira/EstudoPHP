<?php

require_once("config.php");

echo $_SESSION["nome"];

//mata a sessao;
session_unset();

//mata a sessao e retira o usuário da do servidor
//session_destroy();



?>