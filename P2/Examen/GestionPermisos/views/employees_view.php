<?php
include "header.php";
?>

<div class="p-5 mb-4 bg-light hero-image">
    <div class="py-5 d-flex flex-column align-items-center">
        <h1 class="display-5 fw-bold text-center text-light">Gestión de empleados</h1>
        <p class="fs-4 text-center text-light">
            <?php echo $_SESSION['username']; ?>
        </p>
        <a href="logout.php" class="btn btn-danger btn-lg">Cerrar sesión</a>
    </div>
</div>
<div class="container">
    <form id="search-form">
        <div class="d-flex justify-content-center">
            <input type="text" placeholder="Emplado" class="form-control w-50"  id="search-input">
            <input type="submit" value="Buscar" class="btn btn-warning mx-3">
        </div>
    </form>

    <div class="p-5" id="table-container">
    </div>

    <div class="d-flex justify-content-center pb-5">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#form-modal" id="add-employee-button">Agregar empleado</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="form-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="employee-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="form-modal-title">Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal-button"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3" id="employee-id-container">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="last-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="id-card" class="form-label">C.I.</label>
                        <input type="text" class="form-control" id="id-card" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-modal-button">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="add-form-button">Agregar</button>
                    <button type="submit" class="btn btn-primary" id="update-form-button">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="./scripts/employees.script.js"></script>

<?php include 'footer.php';?>