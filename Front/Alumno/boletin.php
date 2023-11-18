<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin Virtual</title>
    <link href="/Boletin/Front/Alumno/boletin.css?v=<?php echo (rand()); ?>" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="cuerpo">
        <header>
            <div class="caja-titulo">
                <div class="titulo">Boletin Virtual<div class="fecha_año">2023</div>
                </div>
            </div>
            <div class="caja-cerrar-sesion">
                <button id="cerrar_sesion" class="cerrar-sesion"><a href=/Boletin/Back/Indexes/IndexLogin.php;><img src="/Boletin/Front/iconos/salida.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></a></button>
            </div>
        </header>
        <main>     
            <div class="datos">
                <div class="curso"></div>
                <div class="datos-usuario"></div>
            </div>
            <div class="botones-opciones">
                <button class="ampliar"><img src="/Boletin/Front/iconos/ampliar.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></button>
                <button class="pdf"><img src="/Boletin/Front/iconos/descargar.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></button>
            </div>
            <div class="libreta">
                <form>
                    <div class="notas"></div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>