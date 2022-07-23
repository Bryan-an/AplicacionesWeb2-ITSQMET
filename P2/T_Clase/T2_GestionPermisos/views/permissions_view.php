<?php
include "header.php";
?>

<div class="p-5 mb-4 bg-light hero-image">
    <div class="py-5 d-flex flex-column align-items-center">
        <h1 class="display-5 fw-bold text-center text-light">Gestión de permisos</h1>
        <p class="fs-4 text-center text-light">
            <?php echo $_SESSION['username']; ?>
        </p>
        <a href="logout.php" class="btn btn-danger btn-lg">Cerrar sesión</a>
    </div>
</div>
<div class="container">
    <form id="search-form">
        <div class="d-flex justify-content-center">
            <input type="text" placeholder="Fecha o tipo de permiso" class="form-control w-50"  id="search-input">
            <input type="submit" value="Buscar" class="btn btn-warning mx-3">
        </div>
    </form>

    <div class="p-5" id="table-container">
    </div>

    <?php
if ($_SESSION['role'] == 'empleado') {
    echo '<div class="d-flex justify-content-center pb-5"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#form-modal" id="add-permission-button">Agregar permiso</button></div>';
}
?>
</div>

<!-- Modal -->
<div class="modal fade" id="form-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="permission-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="form-modal-title">Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal-button"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3" id="permission-id-container">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="start-date" class="form-label">Fecha de inicio</label>
                        <input type="date" class="form-control" id="start-date" required>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Fecha de fin</label>
                        <input type="date" class="form-control" id="end-date" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select id="type" class="form-select" required>
                            <option value="">Seleccione un tipo</option>
                            <option value="laboral">Laboral</option>
                            <option value="personal">Personal</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="observation" class="form-label">Observación</label>
                        <textarea id="observation" class="form-control"></textarea>
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

<script>
    const ROLE = "<?php echo $_SESSION['role'] ?>";
</script>
<script type="text/javascript" src="./scripts/permissions.script.js"></script>

<?php include 'footer.php';?>