<?php
/**
 * ejercicio formulario dinamico
 * @AUTHOR JAVIER RUIZ MOELRO
 */

$datos = array(
    "nombre" => $_POST["nombre"],
    "apellidos" => $_POST["apellidos"],
    "email" => $_POST["email"]
);

foreach($datos as $dato => $valor){
    echo "$dato $valor</br>";
}