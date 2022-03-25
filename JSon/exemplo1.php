<?php

$pessoas = array();

array_push($pessoas, 
	array('nome'=>'Luiz Vieira',
          'idade'=> 42 ),
	array('nome'=>'Tissiana',
          'idade'=> 38 ),
	array('nome'=>'Davi Vieira',
          'idade'=> 10 ),
	array('nome'=>'Helena Vieira',
          'idade'=> 8 ),
);

echo json_encode($pessoas);

?>