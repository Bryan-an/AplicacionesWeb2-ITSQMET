<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Películas</title>
    <?php include '../controlador/libs.php'?>
    <script type="text/javascript" src="../controlador/js/MoviesFunctions.js"></script>
</head>
<body>
    <?php include '../controlador/header.php'?>
    <div>
        <div class="container" align="center">
            <h2>Vista Películas</h2>
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
                            <button type="button" onclick="searchMovies()" class="btn btn-primary" style="width: 75px; height: 35px;">Buscar</button>
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
                <h4 class="modal-title">Crear película</h4>
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
                                    <label>Categoría:</label>
                                </td>
                                <td>
                                    <input type="text" id="categoryIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Tipo:</label>
                                </td>
                                <td>
                                    <input type="text" id="typeIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Calificación:</label>
                                </td>
                                <td>
                                    <input type="text" id="ratingIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="createMovie()">
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
                <h4 class="modal-title">Actualiza película</h4>
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
                                    <label>Categoría:</label>
                                </td>
                                <td>
                                    <input type="text" id="categoryUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Tipo:</label>
                                </td>
                                <td>
                                    <input type="text" id="typeUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Calificación:</label>
                                </td>
                                <td>
                                    <input type="text" id="ratingUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="updateMovie()">
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
                    <h4 class="modal-title">Eliminar película</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" align="center">
                    <input type="hidden" id="idDelete">
                    <h2>¿Deseas eliminar la película?</h2>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="deleteMovie()">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeDeleteButton">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
