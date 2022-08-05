<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Horarios - Peliculas - Salas</title>
    <?php include '../controlador/libs.php'?>
    <script type="text/javascript" src="../controlador/js/SchedulesMoviesRoomsFunctions.js"></script>
</head>
<body>
    <?php include '../controlador/header.php'?>
    <div>
        <div class="container" align="center">
            <h2>Vista Horarios - Peliculas - Salas</h2>
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
                            <button type="button" onclick="searchSchedulesMoviesRooms()" class="btn btn-primary" style="width: 75px; height: 35px;">Buscar</button>
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
                <h4 class="modal-title">Crear horario - pelicula - sala</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" align="center">
                <form>
                        <table>
                            <tr>
                            <td>
                                    <label>Horario:</label>
                                </td>
                                <td>
                                    <select id="scheduleIn">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Película:</label>
                                </td>
                                <td>
                                    <select id="movieIn">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Sala:</label>
                                </td>
                                <td>
                                    <select id="roomIn">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="createSchedulesMoviesRooms()">
                                        Crear
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeCreateButton">Cancelar</button>
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
                <h4 class="modal-title">Actualizar horario - pelicula - sala</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" align="center">
                <form>
                        <table>
                        <tr>
                            <td>
                                    <label>Horario:</label>
                                </td>
                                <td>
                                    <select id="scheduleUp">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Película:</label>
                                </td>
                                <td>
                                    <select id="movieUp">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Sala:</label>
                                </td>
                                <td>
                                    <select id="roomUp">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="updateSchedulesMoviesRooms()">
                                        Actualizar
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeUpdateButton">Cancelar</button>
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
                    <h4 class="modal-title">Eliminar horario - pelicula - sala</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" align="center">
                    <input type="hidden" id="scheduleIdDelete">
                    <input type="hidden" id="movieIdDelete">
                    <input type="hidden" id="roomIdDelete">
                    <h2>¿Deseas eliminar el horario - pelicula - sala?</h2>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="deleteSchedulesMoviesRooms()">Eliminar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeDeleteButton">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
