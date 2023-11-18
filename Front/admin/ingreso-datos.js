function cerrarSesion() {
  // Eliminar la cookie de sesión
  document.cookie = "sesion=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";

  // Redireccionar a la página de inicio
  window.location.href = "sesion-datos.html";
}

const buton = document.getElementById("verTodos");

buton.addEventListener('click', () => {
  // Aquí puedes hacer algo cuando el usuario haga clic en el botón.
  window.location.href = 'usuarios.php';
});