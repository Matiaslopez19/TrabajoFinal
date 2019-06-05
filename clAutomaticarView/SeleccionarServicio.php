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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
  <title>agendar hora</title>
        <title>Agendar Hora</title>
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
                    <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="InicioCliente.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Salir</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="content">


                    <h2 class="align-center">Seleccionar Servicio</h2>
                    <hr />
                    <form action="../clAutomaticarController/agendaController.php" method="post">
                        <div class="field half">
                            <label for="dept">¿Que servicio necesita?</label>
                            <div class="select-wrapper">
                                <select name="dept" id="dept">
                                    <option value="1" name="servicio">- Servicios -</option>
                                    <option value="1" name="servicio">Cambiar kit de embrague</option>
                                    <option value="1" name="servicio">Cambiar kit de distribución</option>
                                    <option value="1" name="servicio">Cambiar pastillas de freno</option>
                                    <option value="1" name="servicio">Cambiar inyectores</option>
                                    <option value="1" name="servicio">Cambiar junta de culata</option>
                                    <option value="" name="servicio">Cambiar caja de cambios</option>
                                    <option value="1" name="servicio">Cambiar amortiguadores</option>
                                    <option value="1" name="servicio">Cambiar cuerpo de aceleración</option>
                                    <option value="1" name="servicio">Cambiar alternador</option>
                                    <option value="1" name="servicio">Cambiar bateria</option>
                                    <option value="1" name="servicio">Cambiar retenes de válvulas</option>
                                    <option value="1" name="servicio">Cambiar cables de bujías</option>
                                    <option value="1" name="servicio">Cambiar radiador</option>
                                    <option value="1" name="servicio">Cambiar silenciador</option>
                                    <option value="1" name="servicio">Cambiar catalitico</option>
                                    <option value="1" name="servicio">Cambiar aceite de motor</option>
                                    <option value="1" name="servicio">Cambiar filtro de aceite</option>
                                    <option value="1" name="servicio">Cambiar Bujías</option>

                                </select>
                            </div>
                        </div>
                        <div class="field half">
                            <label for="dept">¿Servicio a domicilio?</label>
                            <div class="select-wrapper">
                                <select id="selectBox" onchange="changeFunc();">
                                    <option value="1" name="opcion">No</option>
                                    <option value="2" name="opcion">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="field half">
                            <label>Patente</label>
                            <input name="patente" type="text" placeholder="AA0000 - AAAA0000">
                        </div>
                        <section id = "caja">
                            <div class="field half">
                                <label for="dept">Comuna</label>
                                <div class="select-wrapper">
                                    <select name="dept" id="dept">
                                        <option value="1" name="comuna">- Comunas -</option>
                                        <option value="1" name="comuna">Cerrillos</option>
                                        <option value="1" name="comuna">Cerro Navia</option>
                                        <option value="1" name="comuna">Conchalí</option>
                                        <option value="1" name="comuna">El Bosque</option>
                                        <option value="1" name="comuna">Estación Central</option>
                                        <option value="1" name="comuna">Huechuraba</option>
                                        <option value="1" name="comuna">Independencia</option>
                                        <option value="1" name="comuna">La Cisterna</option>
                                        <option value="1" name="comuna">La Florida</option>
                                        <option value="1" name="comuna">La Granja</option>
                                        <option value="1" name="comuna">La Pintana</option>
                                        <option value="1" name="comuna">La Reina</option>
                                        <option value="1" name="comuna">Las Condes</option>
                                        <option value="1" name="comuna">Lo Barnechea</option>
                                        <option value="1" name="comuna">Lo Espejo</option>
                                        <option value="1" name="comuna">Lo Prado</option>
                                        <option value="1" name="comuna">Macul</option>
                                        <option value="1" name="comuna">Maipú</option>
                                        <option value="1" name="comuna">Nuñoa</option>
                                        <option value="1" name="comuna">Padre Hurtado</option>
                                        <option value="1" name="comuna">Pedro Aguirre Cerda</option>
                                        <option value="1" name="comuna">Peñalolén</option>
                                        <option value="1" name="comuna">Providencia</option>
                                        <option value="1" name="comuna">Pudahuel</option>
                                        <option value="1" name="comuna">Puente Alto</option>
                                        <option value="1" name="comuna">Quilicura</option>
                                        <option value="1" name="comuna">Quinta Normal</option>
                                        <option value="1" name="comuna">Recoleta</option>
                                        <option value="1" name="comuna">Renca</option>
                                        <option value="1" name="comuna">San Bernardo</option>
                                        <option value="1" name="comuna">San Joaquín</option>
                                        <option value="1" name="comuna">San Miguel</option>
                                        <option value="1" name="comuna">San Ramón</option>
                                        <option value="1" name="comuna">Santiago</option>
                                        <option value="1" name="comuna">Vitacura</option>
                                        <option value="1" name="comuna">Colina</option>
                                        <option value="1" name="comuna">Lampa</option>
                                        <option value="1" name="comuna">Buin</option>
                                        <option value="1" name="comuna">Peñaflor</option>
                                        <option value="1" name="comuna">Talagante</option>
                                        <option value="1" name="comuna">Paine</option>
                                        <option value="1" name="comuna">Isla de Maipo</option>
                                        <option value="1" name="comuna">El Monte</option>
                                        <option value="1" name="comuna">Pirque</option>
                                        <option value="1" name="comuna">Calera de Tango</option>
                                        <option value="1" name="comuna">San José de Maipo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="field half">
                                <label>Dirección</label>
                                <input name="direccion" id="direccion" type="text" placeholder="Dirección">
                            </div>
                        </section>
                        <br>
                        <div class="field half">
                            <label>Imagen</label>
                            <input name="rutaImagen" id="direccion" type="file" placeholder="Dirección">
                        </div>
                        <ul class="actions align-center">
                           <!-- <li><input type="button" class="button special" value="Atrás" onClick=" window.location.href = '.php'"></li> -->
                        </ul>
                        <ul class="actions align-center">
                            <button type="submit" class="button special" name="horaA">Agendar hora</button>
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
                                $("#menu-toggle").click(function (e) {
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
                } else {
                    document.getElementById("caja").style.display = "block";
                }
            }
        </script>

    </script>

</body>

</html>
