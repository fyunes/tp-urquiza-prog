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
    <div class="container mx-auto text-center">
        <div class="jumbotron text-center">
            <h1>Gastos del hogar</h1>
        </div>
        <div class="text-center">
            <h3>Login de usuario</h3>
            <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>' . $_GET['mensaje'] . '</p></div>';
            }
            ?>

            <form action="login.php" method="post">
                <input name="usuario" class="form-control form-control-lg" placeholder="Usuario"><br>
                <input name="clave" type="password" class="form-control form-control-lg" placeholder="Contraseña"><br>
                <input type="submit" value="Ingresar" class="btn btn-primary">
            </form><br>
            <p><a href="crear_usuario.php">Crear nuevo usuario</a></p>
        </div>
    </div>
</body>

</html>