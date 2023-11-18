<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Datos</title>
    <link rel="stylesheet" type="text/css" href="sesion-datos.css?v=<?php echo (rand()); ?>">
</head>

<body>
    <div id="login-container" class="container">
        <h1>Iniciar Sesión</h1>
        <form id="login-form">  
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" required>

            <button type="button" onclick="iniciarSesion()">Iniciar Sesión</button>
        </form>
    </div>
    <script src="sesion-datos.js"></script>
</body>

</html>