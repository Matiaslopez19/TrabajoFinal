<?php
include '../clAutomaticarDAO/ServicioDAO.php';
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    $usuario=$_SESSION ['user'];
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
        <title>AutomatiCar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
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

      <div class="container-fluid">
        <h1 class="mt-4">Servicios</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
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
