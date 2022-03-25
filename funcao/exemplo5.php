<?php
$a = 10;
// funcao com passagem por valor
function trocaValor($b){
	$b +=50;
	return $b;
}

//passagem por referencia
function trocaValorReferencia(&$b){
	$b +=50;
	return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
echo trocaValorReferencia($a);

?>