<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar datos de la base de datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
          body {
      background: #e5e8ff;
      font-family: 'Times New Roman', Times, serif ;
    }

    table {
      background-color: #e5e8ff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      width: 95%;
      margin: 30px;
    }

    th {
      background-color: #ff4d4d;
      color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    h1 {
      text-align: center;
      background-color: #5f4dff;
      color: white;
      font-size: 36px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      margin-left: 50px;
    }

    .icon {
      width: 35px;
      height: 35px;
    }

    button {
      background-color: #5f4dff;
      color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      border: none;
    }
    .regresar{
      background-color: #5f4dff;
      color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      border: none;
      position: absolute;
    }
    .encabezado{
      position: relative;
    }

    </style>
    <div class="encabezado">
    <button id="regresar" class="regresar"><img src="deshacer.png" alt="Icono" class="icon"></button>
    <h1>Usuarios</h1>
    </div>
    <?php
    // Conectar a la base de datos
    $conexion = new PDO("mysql:host=localhost;dbname=usuarios", "root", "46479090s");

    // Función para eliminar un usuario
    if (isset($_POST['dni'])) {
        $dni = $_POST['dni'];
        $sql = "DELETE FROM usuarios WHERE dni = :dni";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
        $stmt->execute();
    }

    // Recuperar los datos de la tabla
    $consulta = "SELECT * FROM usuarios";
    $resultado = $conexion->query($consulta);

    // Comprobar el resultado
    if ($resultado) {
        echo "<table class='data-table'>";
        echo "<tr>";
        echo "<th style='background-color: #5f4dff;'>DNI</th>";
        echo "<th style='background-color: #5f4dff;'>Apellido</th>";
        echo "<th style='background-color: #5f4dff;'>Nombre</th>";
        echo "<th style='background-color: #5f4dff;'>Contraseña</th>";
        echo "<th style='background-color: #5f4dff;'>Rol</th>";
        echo "<th style='background-color: #5f4dff;'>Acción</th>";
        echo "</tr>";
        echo "<tr>";
        echo "</tr>";
        echo "<tr>";
        echo "</tr>";

        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td style='color: black;'>" . $fila["dni"] . "</td>";
            echo "<td style='color: black;'>" . $fila["apellido"] . "</td>";
            echo "<td style='color: black;'>" . $fila["nombre"] . "</td>";
            echo "<td style='color: black;'>" . $fila["contraseña"] . "</td>";
            echo "<td style='color: black;'>" . $fila["rol"] . "</td>";
            echo "<td>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='dni' value='" . $fila["dni"] . "'>";
            echo "<button type='submit'>Borrar</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se han encontrado datos en la tabla.";
    }

    // Cerrar la conexión
    $conexion = null;
    ?>
    <script>
        const botonRegresar = document.getElementById("regresar");

        botonRegresar.addEventListener('click', () => {
            // Redirige al usuario a la página de ingreso de datos
            window.location.href = 'ingreso-datos.html';
        });

        // Resto del código aquí

    </script>
</body>
</html>
