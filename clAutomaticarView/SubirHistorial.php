<?php
include '../clAutomaticarDAO/ServicioDAO.php';
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>


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
          <a href="AsignarMecanico.php" class="list-group-item list-group-item-action bg-light">Asignar Mecánico</a>
        <a href="SubirHistorial.php" class="list-group-item list-group-item-action bg-light">Subir Historial  </a>
        <a href="CrearCuentaM.php" class="list-group-item list-group-item-action bg-light">Crear Cuenta Mecánico</a>
      </div>
    </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

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

                <div class="content">


                    <h2 class="align-center">Historial</h2>
                    <hr />
                    <form action="#" method="post">
                        <div class="field half">
                            <label>Ingrese patente del vehículo</label>
                            <input name="patente" id="email" type="email" placeholder="AA0000 - AAAA0000">
                        </div>
                        <br>

                        <ul class="actions align-center">
                            <li><input value="Subir historial" class="button special" type="submit"></li>
                        </ul>
                        <ul class="actions align-center">
                           <!-- <li><input type="button" class="button special" value="Atrás" onClick=" window.location.href = '.php'"></li> -->
                        </ul>

                    </form>
                </div>
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
