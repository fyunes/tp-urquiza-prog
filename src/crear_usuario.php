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
    <div class="container">
        <div class="jumbotron text-center">

            <h1>Sistema bancario</h1>
        </div>
        <div class="text-center">
            <h3>Crear nuevo usuario</h3>
            <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>' . $_GET['mensaje'] . '</p></div>';
            }
            ?>

            <form action="procesar_crear_usuario.php" method="post">
                <input name="usuario" class="form-control form-control-lg" placeholder="Usuario"><br>
                <input name="clave" type="password" class="form-control form-control-lg" placeholder="Contraseña"><br>
                <input name="nombre" class="form-control form-control-lg" placeholder="Nombre"><br>
                <input name="apellido" class="form-control form-control-lg" placeholder="Apellido"><br>
                <input type="submit" value="Registrarse" class="btn btn-primary">
                <a href='index.php' class='btn btn-secondary'> Volver </a>
            </form>
        </div>
    </div>
</body>

</html>