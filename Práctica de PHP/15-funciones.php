
<?php include 'includes/header.php';


// En ves de int puede ser float , bool

function sumar(int $numero1 = 0, int $numero2 = 0){
    echo $numero1 + $numero2;
};
sumar(10, 20);

// parametro nombrado esta es otra forma
sumar(numero1 : 10, numero2 : 20);



include 'includes/footer.php';