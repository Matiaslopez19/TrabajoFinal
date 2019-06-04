<!DOCTYPE html>
<html lang="en">

<head>

<?php
    
   include '../clAutomaticarData/User.php'; 
   session_start();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php
    //$usuario=$_SESSION ['user'];
        
              
        echo "Bienvenido ".$_SESSION ['user']['nombre'];
  ?></title>

    <!-- Bootstrap core CSS -->
  <link href="../assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <!-- Custom styles for this template -->
  <link href="../assets/css/simple-sidebar.css" rel="stylesheet" type="text/css"/>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">AutomatiCar</div>
      <div class="list-group list-group-flush">
          <a href="../clAutomaticarView/SeleccionarServicio.php" class="list-group-item list-group-item-action bg-light">Agendar Hora</a>
          <a href="Historial.php" class="list-group-item list-group-item-action bg-light">Descargar Historial</a>
          <a href="HorasAgendadas.php" class="list-group-item list-group-item-action bg-light">Horas Agendadas</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="InicioCliente.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Salir</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="content">

                                                                    
                                                                    <h2 class="align-center">Seleccionar Servicio</h2>
                <hr />
                <form action="#" method="post">
                  <div class="field half">
                    <label for="dept">¿Que servicio necesita?</label>
                    <div class="select-wrapper">
                      <select name="dept" id="dept">
                        <option value="1">- Servicios -</option>
                        <option value="1">Cambiar kit de embrague</option>
                        <option value="1">Cambiar kit de distribución</option>
                        <option value="1">Cambiar pastillas de freno</option>
                        <option value="1">Cambiar inyectores</option>
                        <option value="1">Cambiar junta de culata</option>
                        <option value="">Cambiar caja de cambios</option>
                        <option value="1">Cambiar amortiguadores</option>
                        <option value="1">Cambiar cuerpo de aceleración</option>
                        <option value="1">Cambiar alternador</option>
                        <option value="1">Cambiar bateria</option>
                        <option value="">Cambiar retenes de válvulas</option>
                        <option value="1">Cambiar cables de bujías</option>
                        <option value="1">Cambiar radiador</option>
                        <option value="1">Cambiar silenciador</option>
                        <option value="1">Cambiar catalitico</option>
                        <option value="1">Cambiar aceite de motor</option>
                        <option value="1">Cambiar filtro de aceite</option>
                        <option value="1">Cambiar Bujías</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="field half">
                    <label for="dept">¿Servicio a domicilio?</label>
                    <div class="select-wrapper">
                      <select id="selectBox" onchange="changeFunc();">
                        <option value="1">No</option>
                        <option value="2">Si</option>
                      </select>
                    </div>
                  </div>
                  <div class="field half">
                    <label>Patente</label>
                    <input name="patente" id="email" type="email" placeholder="AA0000 - AAAA0000">
                  </div>
                  <section id = "caja">
                  <div class="field half">
                    <label for="dept">Comuna</label>
                    <div class="select-wrapper">
                      <select name="dept" id="dept">
                        <option value="">- Comunas -</option>
                        <option value="">Cerrillos</option>
                        <option value="1">Cerro Navia</option>
                        <option value="1">Conchalí</option>
                        <option value="1">El Bosque</option>
                        <option value="1">Estación Central</option>
                        <option value="">Huechuraba</option>
                        <option value="1">Independencia</option>
                        <option value="1">La Cisterna</option>
                        <option value="1">La Florida</option>
                        <option value="1">La Granja</option>
                        <option value="">La Pintana</option>
                        <option value="1">La Reina</option>
                        <option value="1">Las Condes</option>
                        <option value="1">Lo Barnechea</option>
                        <option value="1">Lo Espejo</option>
                        <option value="1">Lo Prado</option>
                        <option value="1">Macul</option>
                        <option value="1">Maipú</option>
                        <option value="1">Nuñoa</option>
                        <option value="">Padre Hurtado</option>
                        <option value="1">Pedro Aguirre Cerda</option>
                        <option value="1">Peñalolén</option>
                        <option value="1">Providencia</option>
                        <option value="1">Pudahuel</option>
                        <option value="1">Puente Alto</option>
                        <option value="1">Quilicura</option>
                        <option value="1">Quinta Normal</option>
                        <option value="1">Recoleta</option>
                        <option value="1">Renca</option>
                        <option value="1">San Bernardo</option>
                        <option value="1">San Joaquín</option>
                        <option value="1">San Miguel</option>
                        <option value="1">San Ramón</option>
                        <option value="1">Santiago</option>
                        <option value="1">Vitacura</option>
                        <option value="1">Colina</option>
                        <option value="1">Lampa</option>
                        <option value="1">Buin</option>
                        <option value="1">Peñaflor</option>
                        <option value="1">Talagante</option>
                        <option value="1">Paine</option>
                        <option value="1">Isla de Maipo</option>
                        <option value="1">El Monte</option>
                        <option value="1">Pirque</option>
                        <option value="1">Calera de Tango</option>
                        <option value="1">San José de Maipo</option>
                      </select>
                    </div>
                  </div>
                  
                                                                        <div class="field half">
                    <label>Dirección</label>
                    <input name="Dirección" id="direccion" type="email" placeholder="Dirección">
                  </div>
                  </section>
                                                                    <br>
                                                                        <div class="field half">
                    <label>Imagen</label>
                                                                                    <input name="Dirección" id="direccion" type="file" placeholder="Dirección">
                  </div>
                  
                                                                        <ul class="actions align-center">
                    <li><input type="button" class="button special" value="Atrás" onClick=" window.location.href='.php' "></li> 
                  </ul>
                  <ul class="actions align-center">
                    <li><input value="Agendar" class="button special" type="submit"></li>
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
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script type="text/javascript">
    window.onload = function Ocultar() {
      document.getElementById("caja").style.display = "none";  
    }
   function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == 1) {
      document.getElementById("caja").style.display = "none";
    }else{
      document.getElementById("caja").style.display = "block";
    }     
    }  
  </script>

  </script>

</body>

</html>
