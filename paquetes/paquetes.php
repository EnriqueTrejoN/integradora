<?php
include '../indexheader.php';
?>
<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo de Paquetes</title>
    <link rel="icon" href="../img/logod.png" type="image/png">
    <link href="../dist/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/sweetalert2.min.css">
    <link rel="stylesheet" href="../estilo/estilos.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="container col-12 col-md-10">
                    <!-- modal para registrar -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <div class="container text-center">
                                        <h2 class="modal-title">
                                            Paquete
                                        </h2>
                                    </div>
                                </div>

                                <!-- Modal body registrar -->
                                <div class="modal-body">
                                    <form id="myForm" class="was-validated" method="post">
                                        <input type="hidden" id="id" name="id">
                                        <div class="mb-3">
                                            <label for="paquete" class="form-label">TIPO DE PAQUETE:</label>
                                            <select id="paquete" name="paquete" class="form-control" required>
                                                <option value="">Seleccione un tipo de paquete</option>
                                                <?php
                                                include  "opcionesinput/selectoption.php";
                                                ?>
                                            </select>
                                            <div class="invalid-feedback">Selecciona un tipo de paquete</div>

                                            <label for="evento" class="form-label">EVENTO:</label>
                                            <select id="evento" name="evento" class="form-control" required>
                                                <option value="">Seleccione un evento</option>
                                                <?php
                                                include  "opcionesinput/selectoptionevento.php";
                                                ?>
                                            </select>
                                            <div class="invalid-feedback">Selecciona un evento</div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="fnGuardar()">Guardar</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- modal edit -->
                <div class="modal" id="myeditModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <div class="container text-center">
                                    <h2 class="modal-title">
                                        Paquete</h2>
                                </div>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form id="myeditForm" action="inpaquetesconsultar.php" method="post">
                                    <input type="hidden" id="id" name="id">
                                    <div class="mb-3">
                                        <label for="paquete" class="form-label">TIPO DE PAQUETE:</label>
                                        <select id="paquete" name="paquete" class="form-control" required>
                                            <option value="">Seleccione un tipo de paquete</option>
                                            <?php
                                            include  "opcionesinput/selectoption.php";
                                            ?>
                                        </select>
                                        <label for="evento" class="form-label">EVENTO:</label>
                                        <select id="evento" name="evento" class="form-control" required>
                                            <option value="">Seleccione un evento</option>
                                            <?php
                                            include  "opcionesinput/selectoptionevento.php";
                                            ?>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="fnGuardarCambios()">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
        <div class="container text-center">
            <h2>PAQUETES</h2>
        </div>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#myModal">
        <img src="../img/agregar.png" width="25px" alt="Registrar">
        </button>
        <a href="../reportes/reportepaquetes.php" type="button" class="btn btn-primary mb-3">
            REPORTE
        </a>
            <div class="table-responsive">
                    <table class="table table-dark table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Paquete</th>
                                <th>Eventos</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once 'table.php';
                            ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
    <footer>
        <script src="../dist/jquery.min.js"></script>
        <!-- <script src="../dist/bootstrap.bundle.min.js"></script> -->
        <script src="../dist/sweetalert2@11.js"></script>
        <script src="paquetes.js"></script>
    </footer>
</body>