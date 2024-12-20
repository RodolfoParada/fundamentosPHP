<?php


$nombre = "Anner";
$array = array("1","2","3","casa","$nombre");

// sacO ek numero de elementos
$longitud = count($array);

// recorro todos los elementos
for ($i = 0; $i < $longitud; $i++){
    //saco el valor de cada elemento
    echo $array[$i];
    echo "<br>";   
}

$numeros = array("uno","dos","tres","cuatro");

foreach ($numeros as $key => $value){
    echo $value . "<br>";  
}


