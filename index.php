<?php

///json encode y decode
//json encode array en un JSON

$array_asociativo = [
"nombre"=>"sususki",
"color"=>"blanco",
"edad"=>2021
];


$array_asociativo=["pedro","lizetted"];

///JSON ENCODE

$archivo_json = json_encode($array_asociativo,JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

file_put_contents('data_array simple.json',$archivo_json);

//JSON DECODE

$json_contenido= file_get_contents('data.json');

$json_decode=json_decode($json_contenido,JSON_OBJECT_AS_ARRAY);

// print_r($json_decode);

echo $json_decode['nombre'];

// echo gettype($bar);

?>

