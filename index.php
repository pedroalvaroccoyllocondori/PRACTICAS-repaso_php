<?php

$directorio= "animales";
$archivos =scandir($directorio);

impresion_array($archivos);


function impresion_array($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$archivos =array_diff($archivos,array('..','.'));

// impresion_array($archivos);

$archivos=array_values($archivos);

// impresion_array($archivos);

$animales=array();

for ($i=0; $i <count($archivos) ; $i++) { 
   preg_match("!(.*?)\((.*?)\)!",$archivos[$i],$resultado);


   $nombre_animal=$resultado[1];
   $nombre_animal=ucwords($nombre_animal);

    $animales[$nombre_animal]['nombre_imagen']=$archivos[$i];
    $animales[$nombre_animal]['tipo']=$resultado[2];


}

impresion_array($animales);

echo "<table>";
echo "<tr>";

foreach ($animales as $key => $value) {
    $contenido="<td><span>$key</span></br><img width='100' height='100' src='animales/$value[nombre_imagen]'></img></br><span>$value[tipo]</span></td>";

    echo $contenido;
}


echo "</tr>";
echo "</table>";






?>

