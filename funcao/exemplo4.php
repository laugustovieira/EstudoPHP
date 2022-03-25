<?php
//exemplo de uma função que pode receber varios argumentos

 function ola(){
 	$argumento = func_get_args();
 	return $argumento;
 }
 $array = ola("Bom dia", 1979, "Rua niteroi");
echo $array[0] . "<br>";
echo $array[1] . "<br>";
echo $array[2] . "<br>";

var_dump($array);

?>