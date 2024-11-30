<?php
    session_start();
    if (!isset($_SESSION["id"])) {
        header("location: ../index.php");
    }

    include("conn.php");
    $sql = "SELECT a.*, c.titulo as categoria FROM articulos a INNER JOIN categorias c ON a.id_categoria=c.id";
    $resultado = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Artículos | PHP Proyecto UTD
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
            <h1>Articulos</h1>
            <hr>
            <h1 align="center">Listado</h1> <hr>

            <?php
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<article class='article-item'>";
                        ?>
                            <div class='image-wrap'>
                                <img width="400px" height="300px" src="data:image/jpeg;base64,<?php echo base64_encode($fila['imagen']); ?>" />
                            </div>
                        <?php
                        echo "<div class='data'>";
                        echo "<h2>".$fila["descripcion"]."</h2>";
                        echo "<p>Precio: $".$fila["pu"]."</p>";
                        echo "<p>Cantidad: ".$fila["cantidad"]."</p>";
                        echo "<p>Categoria: ".$fila["categoria"]."</p>";
                        echo "<span class='date'> Creado el " .$fila["date"]."</span>";
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
        <p>Django con Dagonline &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>