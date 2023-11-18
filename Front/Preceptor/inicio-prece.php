<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín Virtual</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/Boletin/Front/diseños/inicio-prece.css?v=<?php echo (rand()); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="cuerpo">
        <header>
            <div class="caja-titulo">
                <div class="titulo">Planilla de notas Virtual<div class="fecha_año">2023</div>
                </div>
            </div>
            <div class="botones-titulo">
                <button class="noti">
                    <img src="/Boletin/Front/iconos/notificaciones.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></button>
               <button class="perfil" id="perfil"><a href="perfil-prece.php"><img src="/Boletin/Front/iconos/perfil.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></a></button>
            </div>
            <div class="boton-buscar">
                <button class="buscar" id="buscar"><img src="/Boletin/Front/iconos/buscar.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></button>
                <input type="text" id="input" class="input" placeholder="Buscar...">
            </div>
            <div class="modalidades">
                <button class="mmo-boton" id="mmo"><img src="/Boletin/Front/iconos/mmo.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></button>
                <button class="tgao-boton" id="tgao"><img src="/Boletin/Front/iconos/economia.png?v=<?php echo (rand()); ?>"
                        alt="Icono" class="icon"></button>
                <button class="tipp-boton" id="tipp"><img src="/Boletin/Front/iconos/informatica.png?v=<?php echo (rand()); ?>"
                        alt="Icono" class="icon"></button>
            </div>
        </header>
        <main>
            <div class="agregar-planilla">
                <button id="planilla" class="bton-agregar"><a href="vista-planilla.php"><img src="/Boletin/Front/iconos/agregar.png?v=<?php echo (rand()); ?>"
                        alt="Icono" class="icon"></a></button>
            </div>
            <div class="botones-opciones">
                <button class="ampliar"><img src="/Boletin/Front/iconos/ampliar.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></button>
                <button class="editar"><img src="/Boletin/Front/iconos/editar.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></button>
                <button class="subir"><img src="/Boletin/Front/iconos/subir.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></button>
                <button class="pdf"><img src="/Boletin/Front/iconos/descargar.png?v=<?php echo (rand()); ?>" alt="Icono"
                        class="icon"></button>
            </div>
            <div class="libreta">
                <form>
                    <div class="notas" id="notas" name="notas"></div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>