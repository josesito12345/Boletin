//Constante de accion
const VISTA=1;
const VALIDAR=1;
// Establece la operacion y el registro de la fila a mostrar en la ficha
function setFila(m,a,r){ // Recibe  "+a+" Regis: "+r);
  // Recupera el campo oculto modo para establecer el modo de la operacion
  var hiModo=document.getElementById("modo");
  // Recupera el campo oculto accion para establecer la operacion
  var hiAccion=document.getElementById("accion");
  // Recupera el campo oculto regis para establecer el registro
  var hiRegistro=document.getElementById("id");

  //Establece valores para los campos ocultos
  hiModo.setAttribute("value",m); //modo
  hiAccion.setAttribute("value",a); //accion
  hiRegistro.setAttribute("value",r); //Establece la clave pasada por parámetro

}

// Establece la operacion a realizar con los datos de la ficha
function setOper(a){ // Recibe el codigo de la operacion o segun el botón pulsado.
  // Recupera el campo oculto modo para establecer la operacion
  var hiModo=document.getElementById("modo");
  // Recupera el campo oculto accion para establecer la operacion
  var hiAccion=document.getElementById("accion");

  // Asigna la accion a pasada por parámetro
  hiAccion.setAttribute("value",VALIDAR);
}