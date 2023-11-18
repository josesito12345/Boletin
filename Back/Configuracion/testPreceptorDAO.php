<?php
#Recupera la acción a realizar.
$oper=$_REQUEST["accion"];

# Crea objeto compra con los datos recuperados
$preceptor = new Preceptor($_REQUEST["idpreceptor"],$_REQUEST["nombre"],
                    $_REQUEST["apellido"],$_REQUEST["dni"],
                    $_REQUEST["cuil"],$_REQUEST["telefono"],$_REQUEST["email"]);
    # Crea un objeto comrpaDAO
 $dao = PreceptorDAO::getInstancia();

 // Recupera la operacion a probar
 switch ($oper){
    case 0: $rowset = $dao->selectByid($preceptor->getIdpreceptor());
    break;
    case 1: $dao->insert($preceptor);
    break;
    case 2: $dao->update($preceptor);
    break;
    case 3: $dao->delete($preceptor->getIdpreceptor());
    break;
    default: echo "<h1>Operacion no exitosa</h1>";
 }

 #Prepara la vista de los datos alamcenados en la base de datos
 if ($oper>0){
    $rowset=$dao->select();

    $dao->listar($rowset);
 }