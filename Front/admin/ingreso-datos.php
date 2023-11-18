<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Datos</title>
    <link href="../ingreso-datos.css?v=<?php echo (rand()); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="data-container" class="container hidden"> 
        <h1>Ingreso de Datos</h1>
        <button type="button" class="close-button" onclick="cerrarSesion()">&#x2716; Cerrar Sesion</button>
        <form action="agregar_usuario.php" method="post">
            
            <label for="dni">DNI:</label>
            <input type="text" id="dni" placeholder="dni" name="dni" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" placeholder="contraseña" name="contraseña" required>
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Nombre" name="nombre" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Email" name="email" required>

            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" placeholder="Telefono" name="telefono" required>

            <label for="rol">Rol:</label>
            <select id="permiso" required name="permiso" aria-placeholder="permiso">
                <option value="preceptor">Preceptor</option>
                <option value="alumno">Alumno</option>
            </select>


            <input type="submit" value="Generar usuario" class="generar">

            <h2>Ver Todos los Usuarios</h2>
            <button type="button" id="verTodos">Ver Todos</button>
        </form>
    </div>
    <script src="ingreso-datos.js"></script>
</body>
</html>