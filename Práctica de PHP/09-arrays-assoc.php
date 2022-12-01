<?php include 'includes/header.php';

// ARREGLOS ASOCIATIVOS

$cliente = [
"nombre" => "jose",
"saldo" => 200,
    "informacion" => [
        "tipo" => "premiun",
        "disponible" => 100
        ]
]; 

echo "<pre>";
var_dump($cliente);
echo "</pre>";

var_dump($cliente['nombre']);
echo "<br>";
var_dump($cliente["informacion"]["tipo"]);

$cliente ["codigo"] = 793128645;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';