<?php
session_start();
if (isset($_SESSION["id"])) {
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Registro | PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <li><a href="../index.php" >Inicio</a></li>
            <?php
            if (isset($_SESSION["id"])) {
                ?>
                <li><a href="mision.php">Misión</a></li>
                <li><a href="vision.php">Visión</a></li>
                <li><a href="acercade.php">Acerca de</a></li>
                <li><a href="articulo.php">Articulo</a></li>
                <li><a href="categoria.php">Categoria</a></li>
                <li><a href="controlador_cerrar.php">Cerrar sesión</a></li>
                <?php
            } else {
                ?>
                <li><a href="registro.php">Registro</a></li>
                <li><a href="login.php">Login</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Registro</h1>
            <hr>
            <form action="" method="post">
                <?php
                    include("conn.php");
                    include("controlador_reg.php");
                ?>
                <label for="correo">Usuario:</label>
                <input type="text" name="user" id="correo">
                <label for="usuario">Password:</label>
                <input type="password" name="passw" id="usuario">
                <input type="submit" name="btnregistrar">
            </form>
        </div>
    </section>
    <footer>
        <p>Curso de Django con Dagonline &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>