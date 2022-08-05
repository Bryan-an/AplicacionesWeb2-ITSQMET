<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellers View</title>
    <?php include '../controlador/libs.php'?>
    <script type="text/javascript" src="../controlador/js/SellersFunctions.js"></script>
</head>
<body>
    <?php include '../controlador/header.php'?>
    <div>
        <div class="container" align="center">
            <h2>Sellers View</h2>
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
                            <button type="button" onclick="searchSellers()" class="btn btn-primary" style="width: 75px; height: 35px;">Buscar</button>
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
                <h4 class="modal-title">Crear vendedor</h4>
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
                                    <label>Apellido:</label>
                                </td>
                                <td>
                                    <input type="text" id="lastNameIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Teléfono:</label>
                                </td>
                                <td>
                                    <input type="text" id="phoneIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Dirección:</label>
                                </td>
                                <td>
                                    <input type="text" id="addressIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Correo electrónico:</label>
                                </td>
                                <td>
                                    <input type="email" id="emailIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Fecha de nacimiento:</label>
                                </td>
                                <td>
                                    <input type="date" id="dateOfBirthIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Cédula:</label>
                                </td>
                                <td>
                                    <input type="text" id="idCardIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="createSeller()">
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
                <h4 class="modal-title">Actualizar vendedor</h4>
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
                                    <label>Apellido:</label>
                                </td>
                                <td>
                                    <input type="text" id="lastNameUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Teléfono:</label>
                                </td>
                                <td>
                                    <input type="text" id="phoneUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Dirección:</label>
                                </td>
                                <td>
                                    <input type="text" id="addressUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Correo electrónico:</label>
                                </td>
                                <td>
                                    <input type="email" id="emailUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Fecha de nacimiento:</label>
                                </td>
                                <td>
                                    <input type="date" id="dateOfBirthUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Cédula:</label>
                                </td>
                                <td>
                                    <input type="text" id="idCardUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="updateSeller()">
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
                    <h4 class="modal-title">Eliminar vendedor</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" align="center">
                    <input type="hidden" id="idDelete">
                    <h2>Deseas eliminar al vendedor?</h2>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="deleteSeller()">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeDeleteButton">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
