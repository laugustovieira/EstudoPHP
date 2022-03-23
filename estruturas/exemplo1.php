<?php
//testando a estrutura if

$qualASuaIdade = 40;

$idadeCrianca = 12;
$idademaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca ){
	echo "Criança";

} elseif ($qualASuaIdade < $idademaior){
	echo "Adolescente";

}elseif ($qualASuaIdade < $idadeMelhor){
	echo "Adulto";

}else{
	echo "Idoso";
}

echo "<br>";
//condição com um comando ternario
echo ($qualASuaIdade < $idademaior)?"Menor de Idade":"Maior de Idade";

?>