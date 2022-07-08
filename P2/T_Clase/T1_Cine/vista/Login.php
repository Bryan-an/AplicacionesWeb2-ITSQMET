<!DOCTYPE html>

<?php
session_start();
$_SESSION['estado'] = "0";
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include '../controlador/libs.php'?>
</head>
<body>
    <div class="container py-4" align="center">
        <h1>Login de usuario</h1>
        <hr>
        <form action="../controlador/VerificarUsuario.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label>Usuario:</label>
                    </td>
                    <td>
                        <input type="text" name="txtUser" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Clave:</label>
                    </td>
                    <td>
                        <input type="password" name="txtPassword" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Iniciar sesión" class="btn btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
