function iniciarSesion() {
  var usuario = document.getElementById("usuario").value;
  var contrasena = document.getElementById("contrasena").value;

  if (usuario === "adminepet" && contrasena === "adminepet") {
    // Redireccionar a la página de datos
    window.location.href = "ingreso-datos.html";
  } else {
    alert("Usuario o contraseña incorrectos");
  }
}