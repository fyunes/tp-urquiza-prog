<?php
// Validamos que el usuario tenga sesión iniciada:
session_start();
if (isset($_SESSION['usuario'])) {
    // Si es así, recuperamos la variable de sesión
    $usuario = unserialize($_SESSION['usuario']);
} else {
    // Si no, redirigimos al login
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Bienvenido al sistema</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">

</head>

<body class="fixed-background">
    <?php include('navbar.php') ?>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Agenda de Gastos</h1>
        </div>
        <div class="text-center">
            <div id="mensaje" class="alert alert-danger text-center">
                <p>Advertencia. Ud va a <strong>eliminar</strong> su usuario.
                    Esta acción no se puede deshacer.</p>
            </div>

            <form action="procesar_borrar_usuario.php" method="post">
                <label for="usuario">Escriba su nombre de usuario para <strong>eliminar</strong> su cuenta: </label><br>
                <input name="usuario" class="form-control form-control-lg" placeholder="Usuario"><br>
                <input type="submit" value="Eliminar usuario" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>

</html>