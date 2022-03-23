<?php
// exemplo de for
for ($idx = 0; $idx <= 1000; $idx++){
	if ($idx >= 200 && $idx <= 800)
		continue;
	if($idx === 900)
		break;

	echo $idx . "<br>";

}
//observação : cuidado com loop com decremento. A condição deve entender que está sofrendo um decremento
//for ($idx = 10; $idx <= 0; $idx--){

//o loop abaixo gera um laço infinito
//for ($idx = 0; $idx <= 10; $idx--){

?>