<?php include 'includes/header.php';

// in_array() -  buscar elementos en un arreglo
$carrito = ['tablet', 'computadora', 'televisor'];

var_dump(in_array('tablet' ,$carrito)); // si existe
var_dump(in_array('audifonos', $carrito)); // no existe

//ordenar elementos de un arreglo indexado
$numeros = array(7,9,3,1,2,8,4,6,5,0);

sort($numeros); // de menor a mayor
rsort($numeros);// de mayor a menor

echo"<pre>";
var_dump($numeros);
echo "<pre>";

//ordenar arreglo asociativo

$cliente = array (
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'jose'
);

echo "<pre>";
var_dump($cliente);
echo "<pre>";

asort($cliente);// ordena por valores
arsort($cliente); // ordena por valores (Z primero)
ksort($cliente);// ordena por llaves (orden alfabetico)
krsort($cliente);// ordena por llaves (orden alfabetico , DE LA Z a la A)

echo "<pre>";
var_dump($cliente);
echo "<pre>";

include 'includes/footer.php';