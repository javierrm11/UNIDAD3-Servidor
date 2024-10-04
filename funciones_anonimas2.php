<?php
/*Crea un script que defina un array de números enteros y utilizando una función
anónima genere un array con el cuadrado de los mismos. */

$numeros = array(10,12,14,30,34);

$numeroscuadrados = array();
$numeroscuadrados = array_map(function ($numero){
    return $numero * $numero;
}, $numeros);

foreach($numeroscuadrados as $num){
    echo "$num ";
};