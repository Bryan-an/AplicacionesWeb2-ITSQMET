<?php

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    include '../model/user_model.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = log_in($username, $password);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
        }

        header('Location: permissions_view.php');
    } else {
        echo "<script>alert('Usuario o contraseña incorrecta.');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <?php include './libs.php';?>
</head>
<body>
    <div class="container">
        <div class="p-5">
            <h1 class="text-center">Iniciar sesión</h1>
        </div>
        <div class="d-flex justify-content-center">
            <form class="w-25" method="POST" action="login.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
