<?php include 'includes/header.php';

// ----------------------------while

// $i = 0; //inicializador

// while ($i < 11) {
//     echo $i. "<br/>";

//     $i++;// incrementador
// }

//----------------------------- do while 
// $i = 0;

// do {
//     echo "<br/>";
//     echo $i++;
// } while ($i < 11);
// echo "<br/>";

// // --------------------------------for loop 
// echo "<br/>";

// EJERCICIO
// *3 imprimir fizz
// * 5 imprimir buzz
// * 3 y 5 imprimir FIZZ BUZZ

// for ($i= 1; $i < 101; $i++) {
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo $i." - FIZZ BUZZ <br/>";
//     }
//     elseif ($i % 5 === 0 ) {
//         echo $i." - BUZZ <br/>";
//     }
//     elseif ($i % 3 === 0) {
//         echo $i." - FIZZ <br/>";
//     }
//     elseif ($i % 1 === 0) {
//         echo $i."<br/>";
//     }
// }

// ------------------------------------------for each

$clientes = array ('pedro', 'juan', 'karen');

foreach ($clientes as $cliente ) {
    echo $cliente."<br/>";
}

echo "<br/>";

for ($i = 0; $i < count($clientes); $i++){
    echo $clientes[$i]."<br/>";
}

echo "<br/>";

$cliente = [
    'nombre' => 'jose',
    'saldo' => 200,
    'tipo' => 'premium'
];

foreach ($cliente as $key => $value) {
    echo $key . " - " . $value . "<br/>";
}

include 'includes/footer.php';
