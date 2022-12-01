<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'televisión 24',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

echo '<pre>';
    var_dump($productos);
echo '</pre>';

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($productos);
echo "<br/>";

echo "<br/>";
$json_array = json_decode($json);
var_dump($json);

include 'includes/footer.php';