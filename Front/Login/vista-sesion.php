<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión Boletín Virtual</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/Boletin/Front/Login/login.css?v=<?php echo (rand()); ?>" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="login.js?v=<?php echo(rand()); ?>"></script>
</head>

<body>
    <div class="contenedor">
        <header>
            <div class="caja-titulo">
                <div class="titulo">Inicio de sesión</div>
            </div>
        </header>
        <main>
            <div class="relleno">
                <form action="/Boletin/Front/Login/index.php" method="POST">
                    <table>
                        <div class="caja-usuario">
                            <div class="usuario">
                                <label for="dni">DNI:</label>
                                <input type="text" id="dni" name="dni">
                            </div>
                        </div>
                        <div class="caja-password">
                            <div class="password">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password">
                            </div>
                        </div>
                        <div class="caja-acceder">
                            <input type="hidden" id="modo" name="modo">
                            <input type="hidden" id="accion" name="accion" value="1">
                            <button id="acceder" class="acceder" method="POST" type="submit" onclick="setOper(<?php echo $accion;?>);">ACCEDER</button>
                        </div>
                    </table>
                </form>
            </div>
        </main>
    </div>
</body>

</html>