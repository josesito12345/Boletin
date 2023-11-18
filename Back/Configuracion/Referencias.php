<?php
//Constantes de Acciones para <Controlador>
define("CANCELAR",-1);
define("VER",0);
define("MODIFICAR",1);
define("ELIMINAR",2);
define("AGREGAR",3);

//Constante para definir Validacion de Usuario en Login
//define("VALIDAR",4); //Validacion de Usuario

//Constantes de Modos <Controlador>
define("VISTA",0);
define("ACTUALIZAR",1);

//Clave inexistente para agregar <Controlador>
define("NUEVO",-1);




//Referencia de Directorio Raiz
define('RAIZ',$_SERVER['DOCUMENT_ROOT'].'/Boletin/');

      /////////////////////
//////REFERENCIAS DE CLASE//////
    //      |||     //
    //      |||     //
    //      |||     //
    //      ↓↓↓     //
//Configuracion
require_once(RAIZ."Back/Configuracion/DataSourceB.php");
//require_once(RAIZ."Back/Configuracion/Controlador.php");
require_once(RAIZ."Back/Controladores/LoginController.php");
//require_once(RAIZ."Back/Configuracion/index.php");
//require_once(RAIZ."Back/Configuracion/Main.php");

//Tablas
require_once(RAIZ."Back/Tablas/AC.php");
require_once(RAIZ."Back/Tablas/ACPMC.php");
require_once(RAIZ."Back/Tablas/Administrador.php");
require_once(RAIZ."Back/Tablas/Alumno.php");
require_once(RAIZ."Back/Tablas/AP.php");
require_once(RAIZ."Back/Tablas/Asignatura.php");
require_once(RAIZ."Back/Tablas/CA.php");
require_once(RAIZ."Back/Tablas/Calificacion.php");
require_once(RAIZ."Back/Tablas/CCAMPPA.php");
require_once(RAIZ."Back/Tablas/Ciclo.php");
require_once(RAIZ."Back/Tablas/Curso.php");
require_once(RAIZ."Back/Tablas/MC.php");
require_once(RAIZ."Back/Tablas/Modalidad.php");
require_once(RAIZ."Back/Tablas/Preceptor.php");
require_once(RAIZ."Back/Tablas/Profesor.php");
require_once(RAIZ."Back/Tablas/UPPAA.php");
require_once(RAIZ."Back/Tablas/Usuario.php");

//Interfaces
require_once(RAIZ."Back/Interface/IAcpmcDAO.php");
require_once(RAIZ."Back/Interface/IAdministradorDAO.php");
require_once(RAIZ."Back/Interface/IAlumnoDAO.php");
require_once(RAIZ."Back/Interface/IAsignaturaDAO.php");
require_once(RAIZ."Back/Interface/ICalificacionDAO.php");
require_once(RAIZ."Back/Interface/ICicloDAO.php");
require_once(RAIZ."Back/Interface/ICursoDAO.php");
require_once(RAIZ."Back/Interface/IModalidadDAO.php");
require_once(RAIZ."Back/Interface/IPreceptorDAO.php");
require_once(RAIZ."Back/Interface/IProfesorDAO.php");
require_once(RAIZ."Back/Interface/IUppaaDAO.php");
require_once(RAIZ."Back/Interface/IUsuarioDAO.php");
  
//DAOs
require_once(RAIZ."Back/DAO/AcpmcDAO.php");
require_once(RAIZ."Back/DAO/AdministradorDAO.php");
require_once(RAIZ."Back/DAO/AlumnoDAO.php");
require_once(RAIZ."Back/DAO/AsignaturaDAO.php");
require_once(RAIZ."Back/DAO/CalificacionDAO.php");
require_once(RAIZ."Back/DAO/CicloDAO.php");
require_once(RAIZ."Back/DAO/CursoDAO.php");
require_once(RAIZ."Back/DAO/ModalidadDAO.php");
require_once(RAIZ."Back/DAO/PreceptorDAO.php");
require_once(RAIZ."Back/DAO/ProfesorDAO.php");
require_once(RAIZ."Back/DAO/UppaaDAO.php");
require_once(RAIZ."Back/DAO/UsuarioDAO.php");



//Vistas
/*
require_once (RAIZ . "Front/Login/vista-sesion.php");
require_once (RAIZ . "Front/Alumno/boletin.php");
*/