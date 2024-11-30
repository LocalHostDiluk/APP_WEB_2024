<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login | PHP Proyecto UTD
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
            <li><a href="mision.html">Misión</a></li>
            <li><a href="vision.html">Visión</a></li>
            <li><a href="acercade.html">Acerca de</a></li>
            <li><a href="php/registro.php">Registro</a></li>
            <li><a href="php/login.php">Login</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Login</h1>
            <hr>
            <form action="" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" required>
                <label for="clave">Password:</label>
                <input type="password" name="clave" id="clave" required>
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </section>
    <footer>
        <p>Curso de Django con Dagonline &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>