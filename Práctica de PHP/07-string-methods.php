<?php include 'includes/header.php';

$nombreCliente = "jose santana";
$saldo = 200;

//---------------------------Conocer la variable 
echo strlen($nombreCliente);
echo "<br/>";
var_dump($nombreCliente);
echo "<br/>";

//-----------------------Eliminar una espacios en blanco al inicio y al final (trim)
$texto = $nombreCliente;
echo trim($nombreCliente);
echo "<br/>";

//------------------------------Convertirlo a mayusculas
echo strtoupper($nombreCliente);
echo "<br/>";

//------------------------------Convertirlo en minusculas 
echo strtolower($nombreCliente);
echo "<br/>";

//---------------------------- Ejemplo práctico
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br/>";

//-----------------------------------remplazar una letra
echo str_replace('jose', 'bolivar', $nombreCliente);
echo "<br/>";

// ---------------------------------revisar si un string existe 
echo strpos($nombreCliente,'jose');
echo "<br/>";

//------------------------------------Concatenación
echo " El cliente " .$nombreCliente. " tiene un saldo de " .$saldo;
echo "<br/>";
echo "el cliente {$nombreCliente} tiene un saldo de {$saldo}";

include 'includes/footer.php';
