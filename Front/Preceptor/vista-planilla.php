<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin Virtual</title>
    <link href="/Boletin/Front/diseños/vista-planilla.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="cuerpo">
        <header>
            <div class="caja-regresar">
                <button id="regresar" class="regresar"><a href="inicio-prece.php"><img src="/Boletin/Front/iconos/deshacer.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></a></button>
            </div>
            <div class="caja-titulo">
                <div class="titulo">Gestión de cursos</div>
            </div>
        </header>   
        <main>
            <form action="datos-planilla.php" method="post">
                <div class="datos-usuario">
                    <div class="buscar"><img src="/Boletin/Front/iconos/buscar.png?v=<?php echo(rand()); ?>" alt="Icono" class="icon"></div>
                    <input type="text" id="buscardor" class="buscador" placeholder="Buscador: Apellido  - Nombre - DNI">
                    <div class="datos-usuario2">
                        <label class="usuario" id="usuario" name="usuario" list="usuarios"></label>
                    </input>
                    </div>
                </div>

                <div class="caja-modalidades">
                    <label for="modalidad" class="modalidad">Modalidades</label>
                    <select class="modalidades" name="modalidades" id="modalidades">
                        <option value="mmo">Maestro mayor de obra</option>
                        <option value="tgao">Técnico en gestión y adminitración de las organizaciones</option>
                        <option value="tipp">Técnico en informática profesional y personal</option>
                    </select>
                </div>

                <div class="caja-curso">
                    <label for="curso" class="curso">Curso</label>
                    <select class="cursos" name="cursoss" id="cursos">
                        <option value="1">1 Primero</option>
                        <option value="2">2 Segundo</option>
                        <option value="3">3 Tercero</option>
                        <option value="4">4 Cuarto</option>
                        <option value="5">5 Quinto</option>
                        <option value="6">6 Sexto</option>
                    </select>
                </div>

                <div class="caja-division">
                    <label for="division" class="division">Division</label>
                    <select class="divisiones" name="divisiones" id="divisiones">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                    </select>
                </div>

                <div class="btn-cargar">
                    <input class="cargar" type="submit" value="GUARDAR">
                </div>
            </form>
        </main>
    </div>
</body>

</html>