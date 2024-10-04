<?
$aPaises = 
    array(
        array('id' => 'es', 'pais' => 'España', 'capital' => 'Madrid'),
        array('id' => 'it', 'pais' => 'Italia', 'capital' => 'Roma'),
        array('id' => 'fr', 'pais' => 'Francia', 'capital' => 'Paris'),
    );

$nombrePaises = array();
foreach ($nombrePaises as $pais){
    $nombrePaises[] = $pais["pais"];
}
print_r ($nombrePaises);

//Opción 2. Con funciones anónimas.
echo "<br/>Opción 2<br/>";
//array_map devuelve un array
//despues de pasar cada uno de los elementos del array
//(segundo parámetro)
//por la función (primer parámetro)
$nombrePaises = array_map(function ($pais) {
return $pais['pais'];
}, $aPaises);
print_r($nombrePaises);