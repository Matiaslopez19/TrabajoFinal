<?php
include '../clAutomaticarDAO/ServicioDAO.php';
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="../assets/fullcalendar/packages/core/main.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/fullcalendar/packages/daygrid/main.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/fullcalendar/packages/timegrid/main.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/fullcalendar/packages/list/main.css" rel="stylesheet" type="text/css"/>
        <script src="../assets/fullcalendar/packages/core/main.js" type="text/javascript"></script>
        <script src="../assets/fullcalendar/packages/interaction/main.js" type="text/javascript"></script>
        <script src="../assets/fullcalendar/packages/daygrid/main.js" type="text/javascript"></script>
        <script src="../assets/fullcalendar/packages/timegrid/main.js" type="text/javascript"></script>
        <script src="../assets/fullcalendar/packages/list/main.js" type="text/javascript"></script> 
        <script src="../assets/js/moment.min.js" type="text/javascript"></script>
        <script src="../assets/js/moment.timeZone.js" type="text/javascript"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>AutomatiCar</title>
        <!-- Bootstrap core CSS -->
        <link href="../assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Custom styles for this template -->
        <link href="../assets/css/simple-sidebar.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading"><a href="index.php"><img src="../images/Captura.png" width="183px" height="130px"/></a></div>
                <div class="list-group list-group-flush">
                    <a href="../clAutomaticarView/AsignarMecanico.php" class="list-group-item list-group-item-action bg-light">Asignar Trabajador</a>
                    <a href="CrearCuentaM.php" class="list-group-item list-group-item-action bg-light">Crear Cuenta Trabajador</a>
                    <a href="EliminarTrabajador.php" class="list-group-item list-group-item-action bg-light">Eliminar Trabajador</a>
                    <a href="SubirHistorial.php" class="list-group-item list-group-item-action bg-light">Subir Historial</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="InicioAdmin.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../clAutomaticarView/Login.php?salir=salir">Salir</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid">
                    <h1 class="mt-4">Eliminar Trabajador</h1>
                </div>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido P</th>
                            <th scope="col">Apellido M</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="../assets/css/vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Menu Toggle Script -->
        <script type="text/javascript">

        $(function () {
            $("#openmodal").click(function () {
                $('#solicitud').modal('show');
            })
            var serviceSelected = <?= (isset($_SESSION['serviceid'])) ? $_SESSION['serviceid'] : 0; ?>


            $("#servicios option[value=" + serviceSelected + "]").attr("selected", true);

        });
        </script>

    </body>

</html>