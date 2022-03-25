<?php
  //pode colocar quanto parametros quiser
  function soma(int ...$valores): int{
  	return array_sum($valores);
  }

  echo var_dump(soma(2,2));
  echo "<br>";
   echo soma(25,23);
  echo "<br>";
  //ignora o ponto flutuante, pois os paramentros devem ser inteiros.
   echo soma(2.7,2.7);
  echo "<br>";
   echo soma(2,2,7,8,9);
  echo "<br>";
?>