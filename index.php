<?php


///json encode y decode
//json encode array en un JSON



///array
$carros = [
"nombre"=>"sususki",
"color"=>"blanco",
"edad"=>2021
];

$json = json_encode($carros);

file_put_contents('data.json',$json);


// echo gettype($bar);

?>

