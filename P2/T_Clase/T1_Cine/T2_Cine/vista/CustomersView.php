<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers View</title>
    <?php include '../controlador/libs.php'?>
    <script type="text/javascript" src="../controlador/js/CustomersFunctions.js"></script>
</head>
<body>
    <?php include '../controlador/header.php'?>
    <div>
        <div class="container" align="center">
            <h2>Customers View</h2>
            <hr>
            <form>
                <table>
                    <tr>
                        <td>
                            <label>Buscar</label>
                        </td>
                        <td>
                            <input type="text" id="buscar">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="button" onclick="buscarC()" class="btn btn-primary" style="width: 75px; height: 35px;">Buscar</button>
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
                <h4 class="modal-title">Crear clientes</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" align="center">
                <form>
                        <table>
                            <tr>
                                <td>
                                    <label>Name:</label>
                                </td>
                                <td>
                                    <input type="text" id="nIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Last name:</label>
                                </td>
                                <td>
                                    <input type="text" id="lnIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>ID Card:</label>
                                </td>
                                <td>
                                    <input type="text" id="icIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email:</label>
                                </td>
                                <td>
                                    <input type="email" id="eIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Date of birth:</label>
                                </td>
                                <td>
                                    <input type="date" id="dobIn">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="">
                                        Crear
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                <h4 class="modal-title">Actualizar clientes</h4>
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
                                    <label>Name:</label>
                                </td>
                                <td>
                                    <input type="text" id="nUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Last name:</label>
                                </td>
                                <td>
                                    <input type="text" id="lnUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>ID Card:</label>
                                </td>
                                <td>
                                    <input type="text" id="icUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email:</label>
                                </td>
                                <td>
                                    <input type="email" id="eUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Date of birth:</label>
                                </td>
                                <td>
                                    <input type="date" id="dobUp">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="updateCustomers()">
                                        Update
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
