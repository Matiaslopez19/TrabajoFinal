<?php
//session_start();
include '../clAutomaticarDAO/ServicioDAO.php';
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>AutomatiCar</title>
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link href="../assets/css/cssLista.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/css/simple-sidebar.css" rel="stylesheet" type="text/css"/>
      
  <link href="../assets/css/cssLista.css" rel="stylesheet" type="text/css"/>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><a href="index.php"><img src="../images/Captura.png" width="183px" height="130px"/></a></div>
      
      <div class="list-group list-group-flush">
        <a href="../clAutomaticarView/SeleccionarServicio.php" class="list-group-item list-group-item-action bg-light">Agendar Hora</a>
        <a href="../clAutomaticarView/Historial.php" class="list-group-item list-group-item-action bg-light">Descargar Historial</a>
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
                <a class="nav-link" href="InicioCliente.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../clAutomaticarController/userController.php?salir=salir">Salir</a>
            </li>
          </ul>
        </div>
      </nav>

<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Reparación</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Mantención</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>Cambio de kit de embrague</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de kit de distribución</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de pastillas de freno</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de inyectores</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de junta de culata</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de caja de cambios</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de amortiguadores</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de cuerpo de aceleración</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de alternador</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de batería</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de reten de válvulas</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de cables de bujías</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de radiador</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de silenciador</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de catalítico</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>Cambio de aceite de motor</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de filtro de aceite</td>
                                        </tr>
                                        <tr>
                                            <td>Inspección de correa alternador</td>
                                        </tr>
                                        <tr>
                                            <td>Inspección de filtro de aire</td>
                                        </tr>
                                        <tr>
                                            <td>Inspección de líquido de frenos</td>
                                        </tr>
                                        <tr>
                                            <td>Inspección de líquido refrigerante</td>
                                        </tr>
                                        <tr>
                                            <td>Revisión de Bornes y nivel de batería</td>
                                        </tr>
                                        <tr>
                                            <td>Revisión de frenos y holgura de freno de mano</td>
                                        </tr>
                                        <tr>
                                            <td>Revisión de nivel de aceite de caja de cambio</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de bujías</td>
                                        </tr>
                                        <tr>
                                            <td>Cambio de filtro de aire</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
  <script src="../assets/css/vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

  <!-- Menu Toggle Script -->
    

</body>

</html>
