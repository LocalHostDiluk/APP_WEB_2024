<?php

if(!empty($_POST["btnregistrar"])) {
    if (empty($_POST["user"]) || empty($_POST["passw"])) {
        echo '<h4 style="color: red;">Todos los campos son obligatorios</h4>';
    } else {
        $user = $_POST["user"];
        $pass = $_POST["passw"];
        $sql = $conn -> query("INSERT INTO usuarios (username,pass,privilegio) VALUES ('$user','$pass','normal')");
        if ($sql) {
            ?>
            <script>
                Swal.fire({
                    title: '¡Registro exitoso!',
                    text: 'Ahora puedes iniciar sesión',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    window.location.href = 'login.php';
                });
            </script>

            <?php
        } else {
            ?>

            <script>
                Swal.fire({
                    title: '¡Error!',
                    text: 'No se pudo registrar, intente de nuevo',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            </script>

            <?php
        }
    }
}
?>