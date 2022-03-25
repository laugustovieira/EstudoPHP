<?php

define("SERVIDOR","127.0.0.1");

echo SERVIDOR;

echo "<br><br>";

//constante array

define("BANCO_DE_DADOS",["127.0.0.1","ROOT","PASSWORD"]);

print_r(BANCO_DE_DADOS);

echo "<br><br>";

print_r(BANCO_DE_DADOS[0]);

?>