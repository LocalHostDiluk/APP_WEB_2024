<?php
    session_start();

    $sql
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Inicio | PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php" >Inicio</a></li>

            <?php
            if (isset($_SESSION["id"])) {
                ?>
                <li><a href="php/mision.php">Misión</a></li>
                <li><a href="php/vision.php">Visión</a></li>
                <li><a href="php/acercade.php">Acerca de</a></li>
                <li><a href="php/articulo.php">Articulo</a></li>
                <li><a href="php/categoria.php">Categoria</a></li>
                <li><a href="php/controlador_cerrar.php">Cerrar sesión</a></li>
                <?php
            } else {
                ?>
                <li><a href="php/registro.php">Registro</a></li>
                <li><a href="php/login.php">Login</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Inicio</h1>
            <hr>
            <?php
                if (isset($_SESSION["id"])) {
                    ?>
                    <div class="alert-success">
                        Bienvenido al inicio de sesion
                    </div>

                    <p>.:: ¡Bienvenido <b> <?php echo $_SESSION["username"] ?> </b>  ::.</p>
                    <?php
                } else{
                    ?>
                    <p>.:: ¡Bienvenido a mi pagina de Inicio!  ::.</p>
                    <?php
                }
            ?>
        </div>
    </section>
    <footer>
        <p>Django con Dagonline &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>