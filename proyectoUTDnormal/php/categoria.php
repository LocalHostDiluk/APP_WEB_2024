<?php
    session_start();
    if (!isset($_SESSION["id"])) {
        header("location: ../index.php");
    }

    include("conn.php");

    $sql = "SELECT * FROM categorias";
    $resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Categoria | PHP Proyecto UTD
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
            <h1>Categorias</h1>
            <hr>

            <h1 align="center">Listado</h1> <hr>

            <?php
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<article class='article-item'>";
                        echo "<div class='data'>";
                        echo "<h2>".$fila["titulo"]."</h2>";
                        echo "<p>Descripción: ".$fila["descripcion"]."</p>";
                        echo "<hr>";
                        echo "</div>";
                        echo "<div class='clearfix'></div>";
                        echo "</article>";
                    }
                } else {
                    echo "No hay articulos";
                }
            ?>

        </div>
    </section>

    <footer>
        <p>Curso de Django con Dagonline &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>