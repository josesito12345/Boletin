<?php
// Constante de sesion.js
define("VALIDAR", 1);
//define("VISTA", 2);

// Referencias
require_once $_SERVER['DOCUMENT_ROOT'].'/Boletin/Back/Configuracion/Referencias.php';

// Instancia el controlador
//$usuarioDAO = UsuarioDAO::getInstancia();
$controller = LoginController::getInstancia();

// Verifica si hay alguna acción cargada
if (isset($_REQUEST["accion"])) { // Accion es establecida desde la Lista o Ficha
  //echo "Accion: ".$_REQUEST["accion"]."<br>";

  $modo = $_REQUEST["modo"]; // Almacena el modo Vista o Actualizacion recibida
  $accion = $_REQUEST["accion"]; // Almacena la accion recibida
  $rol = $controller->validar();

  if ($rol>0){
    //Crear e inicializar Variables de Sesión
    session_start();
    $_SESSION['rol']=$rol;
    
    header("Location: http://localhost/Boletin/Front/Index.php");
  }else{
    $controller->index();
  }

} else { // Entra por aquí la primera vez
  //echo 'Primera vez';
  $controller->index(); // Muestra la lista inicial
}
?>