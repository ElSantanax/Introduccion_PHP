<?php include 'includes/header.php';

function usuarioauntenticado(bool $autenticado) :string {
  if ($autenticado) {
    return "El usuario esta autenticado";
  } else {
    return "El usuario NO esta autenticado";
  }
}

$usuario = usuarioauntenticado(true); 

echo $usuario;

include 'includes/footer.php';