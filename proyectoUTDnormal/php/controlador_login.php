<?php
if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["clave"])) {
        echo '<h4 style="color: red;">Rellena los campos</h4>';
    } else {
        
        $usuario = $_POST["usuario"];
        $pass = $_POST["clave"];
        
        $sql = $conn->query("SELECT * FROM usuarios WHERE username = '$usuario' AND pass = '$pass'");
        
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["username"] = $datos->username;
            $_SESSION["privilegio"] = $datos->privilegio;

            ?>
            <script>
                Swal.fire({
                    title: 'Inicio exitoso!',
                    text: 'Ahora puedes navegar por el sitio',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    window.location.href = '../index.php';
                });
            </script>
            <?php
            exit();
        } else {
            ?>
            <script>
                Swal.fire({
                    title: '¡Error!',
                    text: 'Usuario o contraseña incorrectos',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            </script>
            <?php
        }
    }
}
?>
