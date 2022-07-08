<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Horarios</title>
    <?php include '../controlador/libs.php'?>
    <script type="text/javascript" src="../controlador/js/SchedulesFunctions.js"></script>
</head>
<body>
    <?php include '../controlador/header.php'?>
    <div>
        <div class="container" align="center">
            <h2>Vista Horarios</h2>
            <hr>
            <form>
                <table>
                    <tr>
                        <td>
                            <label>Buscar</label>
                        </td>
                        <td>
                            <input type="text" id="search-text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="button" onclick="searchSchedules()" class="btn btn-primary" style="width: 75px; height: 35px;">Buscar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#crearModal" class="btn btn-success" style="width: 75px; height: 35px;">Crear</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <hr>
        <div class="container">
            <div id="tabla">

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="crearModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crear horario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" align="center">
                <form>
                        <table>
                            <tr>
                                <td>
                                    <label>Hora de inicio:</label>
                                </td>
                                <td>
                                    <input type="time" id="startIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Hora de culminación:</label>
                                </td>
                                <td>
                                    <input type="time" id="endIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="createSchedule()">
                                        Crear
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeCreateButton">Cerrar</button>
                </div>

            </div>

        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="updateModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Actualiza horario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" align="center">
                <form>
                        <table>
                            <tr>
                                <td>
                                    <label>Id:</label>
                                </td>
                                <td>
                                    <input type="text" id="idUp" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Hora de inicio:</label>
                                </td>
                                <td>
                                    <input type="time" id="startUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Hora de culminación:</label>
                                </td>
                                <td>
                                    <input type="time" id="endUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="updateSchedule()">
                                        Actualizar
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeUpdateButton">Cerrar</button>
                </div>

            </div>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar horario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" align="center">
                    <input type="hidden" id="idDelete">
                    <h2>¿Deseas eliminar el horario?</h2>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="deleteSchedule()">Eliminar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeDeleteButton">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
