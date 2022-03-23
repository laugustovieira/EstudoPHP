<?php
$condicao = false;
$quantidadeSorteio = 0;
while(! $condicao){
	$numero = rand(1,10);
	$quantidadeSorteio ++;
	if ($numero == 3){
		echo "Achou";
		$condicao = true;
	}
  echo $numero . " ";
}
echo "<br>"."Quantidade Total de Sorteios ". $quantidadeSorteio . "<br>";

//exemplo de dowhile
//garante que pelo menos a primeira vez vai executar, caso já atinja
// a condição para o loop;
$total = 200;
$desconto = 0.9;
do{
  $total *= $desconto;
  echo $total . "<br>";
}while ($total > 100);

?>