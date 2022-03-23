<?php
 $meses = array(
 	 "Janeiro", "Fevereiro" , "Março",
 	 "Abril", "Maio" , "Junho",
 	 "Julho", "Agosto" , "Setembro",
 	 "Outubro", "Novembro" , "Dezembro"
);

//atribui o conteudo da posição do array a variavel mes
 foreach ($meses as $mes ) {
 	echo "O mês é " . $mes . "<br>";
 }
// quando possui o operador => entende que a primeira variavel é indice e a segunda o valor
 foreach ($meses as $index => $mes ) {
 	echo "Indice(" . $index . ") com mês é " . $mes . "<br>";
 }

?>