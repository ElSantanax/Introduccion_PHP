<?php include 'includes/header.php';

// ARREGLOS INDEXADOS

$carrito = ['tablet', 'television', 'computadora'];

//------------------Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//----------------Acceder a un elemento de un array
echo $carrito[1];

//---------------------------------agregar un nuevo producto a cualquier posicion
$carrito[3] = "nuevo producto...";

//---------------------------------Agregar al final del arreglo 
array_push($carrito, 'audifonos');

//--------------------------------------Agregar al principio del arreglo 
array_unshift($carrito, 'smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//-----------------------------ejemplo-------------------------------

$cliente = array("cliente1" , "cliente2" , "cliente3");

echo"<pre>";
var_dump($cliente);
echo"<pre>";

echo $cliente[2];

include 'includes/footer.php';