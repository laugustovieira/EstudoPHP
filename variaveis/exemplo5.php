<?PHP
//ESCOPO DE VARIÁVEIS
$nome = "luiz";

function teste(){
	//importante para dizer a função que vai usar uma variavel global.
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = 'João';
	echo $nome;
}

teste();
teste2();
?>