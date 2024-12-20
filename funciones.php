<?php

echo"funciones"; 
echo"<br>";
//funciones

function bublefor(){
    $numeros = array("uno", "dos", "tres", "cuatro", "cinco");
    for($i = 0; $i < count($numeros); $i++){
        echo $numeros[$i]."<br>";
    }
}
bublefor();

function suma($num1, $num2){
    $resultado = $num1 + $num2;
    //return $resultado;
    echo "resultado","&nbsp;", $resultado;
}
suma(4,5);

