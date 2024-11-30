<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Registro | PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.html" >Inicio</a></li>
            <li><a href="../html/mision.html">Misión</a></li>
            <li><a href="../html/vision.html">Visión</a></li>
            <li><a href="../html/acercade.html">Acerca de</a></li>
            <li><a href="php/registro.php">Registro</a></li>
            <li><a href="php/login.php">Login</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Registro</h1>
            <hr>
            <form action="">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required>
                <label for="correo">Usuario:</label>
                <input type="text" name="correo" id="correo" required>
                <label for="usuario">Password:</label>
                <input type="password" name="usuario" id="usuario" required>
                <label for="clave">Confirmar Password:</label>
                <input type="password" name="clave" id="clave" required>
                <input type="submit" value="Registrar">
            </form>
        </div>
    </section>
    <footer>
        <p>Curso de Django con Dagonline &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>