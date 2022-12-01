<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'television 24',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach ($productos as $producto) { ?>

    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$ " . $producto['precio']; ?> </p>

        <!-- imprimir en pantalla  -->

        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?></p>

        <!-- otra forma  -->
        <!-- <?php
                if ($producto['disponible'] === true) {
                    echo "<p> Disponible </p>";
                } else {
                    echo "<p> No Disponible </p>";
                }
                ?> -->
    </li>
<?php
}
include 'includes/footer.php';
