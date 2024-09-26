<?php
// 3. Carga fecha de nacimiento en variables y calcula la edad.
$diaNacimiento = "10";
$mesNacimiento = "08";
$anioNacimiento = "2005";

$diaActual = date("d");
$mesActual = date("m");
$anioActual = date("Y");

$edad = $anioActual - $anioNacimiento;
if ($mesActual < $mesNacimiento || $mesActual == $mesNacimiento && $diaActual < $diaNacimiento){
    $edad--;
}
echo "Tu edad es: $edad";