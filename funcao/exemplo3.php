<?php
  function ola($texto = "mundo", $periodo = "Bom Dia"){
  	return "Olá $texto! $periodo <br>";
  }

  echo ola();
  echo ola("Helena", "Boa Noite");
  echo ola("Luiz", "Boa Tarde");
  echo ola("Davi", "");
?>