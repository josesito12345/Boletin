<?php
//Referencias
require_once '../Controladores/AlumnoControler.php';
require_once '../Configuracion/DataSourceB.php';
require_once '../Tablas/Alumno.php';

//Instancia el controlador
$controller = AlumnoControler::getInstancia();

// Verifica si hay alguna acción cargada
if (isset($_REQUEST["accion"])){ //Accion es establecida desde la Lista o Ficha
    
  $modo=$_REQUEST["modo"]; //Almacena el modo Vista o Actualizacion recibida.
  $accion=$_REQUEST["accion"]; //Almacena la accion recibida.
  //$id=$_REQUEST["id"]; //Almacena el id del registro a mostrar.
  //$permiso=$_REQUEST["permiso"]; //Almacena el permiso validado.
  
  if ($modo==VISTA){//Si el modo recibido es VISTA,->
    $controller->ver($id);//->Solicita al controlador para mostrar la ficha principal.
  }else{//Si no, Está en modo actualizacion y debe relizar alguna accion.
    switch($accion){//Verifica la acción recibida->
      case VALIDAR:
        $permiso =  $controller->validacion();
        if ($permiso!==0){
          header('Location: http://localhost/Boletin/Back/Indexes/IndexALumno.php?permiso=.$permiso.');
        }
        
      default:
      echo 'DEFAULT';
          $controller->index(); //Caso no haya sido ninguna de las otras acciones
    }
  }
}else{//Entra por aquí la primera vez
  echo 'MAL';
  $controller->index(); //Muestra la lista inicial
}
?>