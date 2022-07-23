<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Salas</title>
    <?php include '../controlador/libs.php'?>
    <script type="text/javascript" src="../controlador/js/RoomsFunctions.js"></script>
</head>
<body>
    <?php include '../controlador/header.php'?>
    <div>
        <div class="container" align="center">
            <h2>Vista Salas</h2>
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
                            <button type="button" onclick="searchRooms()" class="btn btn-primary" style="width: 75px; height: 35px;">Buscar</button>
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
                <h4 class="modal-title">Crear Sala</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" align="center">
                <form>
                        <table>
                            <tr>
                                <td>
                                    <label>Nombre:</label>
                                </td>
                                <td>
                                    <input type="text" id="nameIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Capacidad:</label>
                                </td>
                                <td>
                                    <input type="number" id="capacityIn" min="1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Característica:</label>
                                </td>
                                <td>
                                    <input type="text" id="featureIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="createRoom()">
                                        Crear
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeCreateButton">Close</button>
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
                <h4 class="modal-title">Actualiza Sala</h4>
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
                                    <label>Nombre:</label>
                                </td>
                                <td>
                                    <input type="text" id="nameUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Capacidad:</label>
                                </td>
                                <td>
                                    <input type="number" id="capacityUp" min="1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Característica:</label>
                                </td>
                                <td>
                                    <input type="text" id="featureUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="updateRoom()">
                                        Update
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeUpdateButton">Close</button>
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
                    <h4 class="modal-title">Eliminar Sala</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" align="center">
                    <input type="hidden" id="idDelete">
                    <h2>¿Deseas eliminar la sala?</h2>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="deleteRoom()">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeDeleteButton">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
