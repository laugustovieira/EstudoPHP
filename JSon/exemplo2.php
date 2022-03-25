<?php

 $jsonv = '[{"nome":"Luiz Vieira","idade":42},{"nome":"Tissiana","idade":38},{"nome":"Davi Vieira","idade":10},{"nome":"Helena Vieira","idade":8}]';

$data = json_decode($jsonv, true);

var_dump($data);

echo "<br><br>";

print_r($data);

?>