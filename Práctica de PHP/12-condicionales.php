<?php include 'includes/header.php';

$autenticado = true; // o false 
$admin = false;

if ($autenticado || $admin) { // el || revisa si se cumplen una de las dos condiciones y el && revisa si ambas condiciones se cumplan

    echo "El cliente esta autenticado";
} else {
    echo "El cliente no esta auntenticado";
};
echo "<br/>";


// if anidados

$cliente = [
    "nombre" => "jose",
    'saldo' => 300,
    'informacion' => [
        "tipo" => 'premium'
    ]
];

if (empty($cliente)) {
    echo "El arreglo cliente esta vacio";
} else {
    echo "El arreglo de cliente no esta vacio";
 }
 echo "<br/>";

//ejemplo con negación(!empty)
if (!empty($cliente)) {
    echo "El arreglo cliente esta vacio";
}
if ($cliente['saldo'] > 0) {
    echo " Saldo suficiente ";
} else {
    echo " Saldo Insuficiente ";
};
echo "<br/>";
    

 // else if 
 if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'premium'){
    echo "El cliente es premium";
} else {
     echo "No hay cliente definido";
}
echo "<br/>";


// switch   

$tecnologia = "PHP"; // o Java

switch ($tecnologia) {
    case 'PHP':
        echo " Un excelente lenguaje de programación ";
        break;

    case 'Java':
        echo " Este es Java, usado para Minecraft ";
        break;

    default:
        echo " Algún lenguaje de programación ";
        break;
}



include 'includes/footer.php';