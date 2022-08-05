<?php
session_start();

if ($_SESSION['estado'] == "0") {
    header('Location: Login.php');
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>.:Cine:.</h1>
        </div>
        <div class="col-md-4">
            <h5>Usuario:
<?php
echo $_SESSION['usuario'];
?>
            </h5>
            <h5> Role:
<?php
echo $_SESSION['roleName'];
?>
            </h5>
            <h5>
                <a href="../vista/Login.php">Cerrar sesión</a>
            </h5>
        </div>
    </div>
</div>
<div class="container">
    <div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="../vista/Menu.php">Logo</a>

            <!-- Links -->
            <ul class="navbar-nav">

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Ingreso
                    </a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="../vista/CustomersView.php">Customers</a>
<?php
if ($_SESSION['role'] == "1") {
    ?>
                        <a class="dropdown-item" href="../vista/MoviesView.php">Movies</a>
                        <a class="dropdown-item" href="../vista/SchedulesView.php">Schedules</a>
                        <a class="dropdown-item" href="../vista/RoomsView.php">Rooms</a>
<?php
}
?>
                        <a class="dropdown-item" href="../vista/SchedulesMoviesRoomsView.php">Horarios - Peliculas - Salas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Venta
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Tickets</a>
                    </div>
                </li>

                <?php
if ($_SESSION['role'] == "1") {
    ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Gestión
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../vista/SellersView.php">Sellers</a>
                        <a class="dropdown-item" href="../vista/UsersView.php">Users</a>
                    </div>
                </li>
<?php
}
?>
            </ul>
        </nav>
    </div>
</div>
