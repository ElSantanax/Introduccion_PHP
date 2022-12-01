<?php include 'includes/header.php';


$clientes = [];
$clientes2 = array();
$clientes3 = array('pedro' , 'juan' , 'karen');
$cliente = [
    "nombre" => "jose",
    "saldo" => 200
];

// Empty - revisa si un arreglo esta vacio 
var_dump(empty($clientes));
echo "<br/>";
var_dump(empty($clientes2));
echo "<br/>";
var_dump(empty($clientes3));
echo "<br/>";

// Isset - revisa si un arreglo esta creado o una propiedad esta definida
var_dump(isset($clientes3));
echo "<br/>";

// Isset - tambien revisa si una propiedad de un arreglo asociativo, existe 
var_dump(isset($cliente["nombre"]));

include 'includes/footer.php';

