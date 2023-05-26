
<?php

//recorrer un array asociativo con for each

$arreglo=array("jose"=>["pelicano","foca"],"maria"=>"perico","pedro"=>"canario");

foreach($arreglo as $dueño=>$animal){
    
    echo "<pre>";
    echo "</pre>";
    echo "<b> el dueno de </b>".$animal[0]."<b> es:</b>".$dueño;
    
}

?>