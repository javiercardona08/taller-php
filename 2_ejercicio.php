<?php

$numeroRandom = rand(1,100);
$numero = $numeroRandom;

echo " El numero generado es: ". $numeroRandom . "<br>";

echo "<br>";

if ($numeroRandom < 50){
    echo "El numero es menor a 50" ;
}else if ($numeroRandom == 50) {
    echo "El numero es = a 50 <br>" ;
}else {
    echo "El numero es mayor a 50" ;
}

