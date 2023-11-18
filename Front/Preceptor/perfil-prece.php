<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin Virtual</title>
    <link href="/Boletin/Front/diseños/perfil-prece.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css"/></head>

<body>
    <div class="cuerpo">
        <header>
            <div class="caja-regresar">
                <button id="regresar" class="regresar"><a href="inicio-prece.php"><img src="/Boletin/Front/iconos/deshacer.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></a></button>
            </div>
            <div class="caja-titulo">
                <div class="titulo">Perfil</div>
            </div>
            <div class="caja-sesion">
                <button id="cerrar-sesion" class="cerrar-sesion"><a href="vista-sesion.php"><img src="/Boletin/Front/iconos/salida.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></a></button>
            </div>
        </header>
        <main>
            SE UTILIZA METODO UPDATE
            <form action="" method="post">
                <div class="caja-usuario">
                    <label class="usuario">
                </div>
                <div class="caja-contraseña">
                    <label class="contraseña">
                </div>
                <div class="caja-btn-cambio">
                    <button class="btn-cambio"><img src="/Boletin/Front/iconos/editar.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></button>
                </div>
                <div class="caja-cambio-contraseña">
                    <input class="cambio-contraseña" placeholder="Nueva contraseña...">
                </div>
                <div class="btn-cargar">
                    <input class="cargar" type="submit" value="GUARDAR">
                </div>

            </form>
        </main>
    </div>
</body>

</html>