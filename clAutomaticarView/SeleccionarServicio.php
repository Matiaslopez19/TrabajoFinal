<?php
include '../clAutomaticarDAO/ServicioDAO.php';
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta charset='utf-8' />
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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Automaticar</title>
        <!-- Bootstrap core CSS -->
        <link href="../assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Custom styles for this template -->
        <link href="../assets/css/simple-sidebar.css" rel="stylesheet" type="text/css"/>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var initialTimeZone = 'local';
                var timeZoneSelectorEl = document.getElementById('time-zone-selector');
                var loadingEl = document.getElementById('loading');
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['interaction', 'dayGrid', 'timeGrid'],
                    timeZone: initialTimeZone,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek'
                    },
                    defaultDate: '2019-06-12',
                    navLinks: true, // can click day/week names to navigate views
                    //editable: true, //permite modificar el lugar de los eventos en el calendario
                    selectable: true,
                    //eventLimit: true, // permite mantener 2 o mas horas al mismo tiempo
                    events: {
                        url: 'http://localhost:81/TrabajoFinal/clAutomaticarController/EventosCalendario.php',
                        failure: function () {
                            document.getElementById('script-warning').style.display = 'inline'; // show
                        }

                    },
                    eventMouseEnter: function (e) {
                        if (e.event.backgroundColor == 'red') {
                            e.event.editable = false;
                            calendar.render();
                        }
                    },
                    loading: function (bool) {
                        if (bool) {
                            loadingEl.style.display = 'inline'; // show
                        } else {
                            loadingEl.style.display = 'none'; // hide
                        }
                    },

                    eventTimeFormat: {hour: 'numeric', minute: '2-digit', timeZoneName: 'short'},

                    dateClick: function (arg) {
                        console.log('dateClick', calendar.formatIso(arg.date));
                    },
                    select: function (arg) {
                        //console.log('select', calendar.formatIso(arg.start), calendar.formatIso(arg.end));

                        $("#solicitud").modal('show');
                        $("#fecha").empty();
                        $("#fecha").append("<span>Día:" + moment(arg.start).format("YYYY-MM-DD") + "hora inicio:" + moment(arg.start).format("hh:mm:ss") + "hora termino:" + moment(arg.end).format("hh:mm:ss") + "</span>");
                        //alert("Ha elegido el día: "+moment(arg.start).format("YYYY-MM-DD")+", a la hora de: "+moment(arg.start).format("hh:mm:ss")+" y con hora de termino de: "+moment(arg.end).format("hh:mm:ss"));
                        $("#fAgenda").append(moment(arg.start).format("YYYY-MM-DD"));
                        $("#hInicio").append(moment(arg.start).format("hh:mm:ss"));
                        $("#hTermino").append(moment(arg.end).format("hh:mm:ss"));
                    }
                });

                calendar.render();

                // load the list of available timezones, build the <select> options
                // it's HIGHLY recommended to use a different library for network requests, not this internal util func
                FullCalendar.requestJson('GET', '../assets/fullcalendar/demos/php/get-time-zones.php', {}, function (timeZones) {

                    timeZones.forEach(function (timeZone) {
                        var optionEl;

                        if (timeZone !== 'UTC') { // UTC is already in the list
                            optionEl = document.createElement('option');
                            optionEl.value = timeZone;
                            optionEl.innerText = timeZone;
                            timeZoneSelectorEl.appendChild(optionEl);
                        }
                    });
                }, function () {
                    // TODO: handle error
                });

                // when the timezone selector changes, dynamically change the calendar option
                timeZoneSelectorEl.addEventListener('change', function () {
                    calendar.setOption('timeZone', this.value);
                });
            });

        </script>
        <style>

            body {
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
            }

            #top {
                background: #eee;
                border-bottom: 1px solid #ddd;
                padding: 0 10px;
                line-height: 40px;
                font-size: 12px;
            }
            .left { float: left }
            .right { float: right }
            .clear { clear: both }

            #script-warning, #loading { display: none }
            #script-warning { font-weight: bold; color: red }

            #calendar {
                max-width: 900px;
                margin: 40px auto;
                padding: 0 10px;
            }

            .tzo {
                color: #000;
            }

        </style>
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
                                <a class="nav-link" href="../clAutomaticarController/userController.php?salir=salir">Salir</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div id='top'>

                    <div class='right'>
                        <span id='loading'>loading...</span>
                        <span id='script-warning'><code>php/get-events.php</code> must be running.</span>
                    </div>
                    <div class='clear'></div>

                </div>

                <div id='calendar'></div>
                <div class="content">
                    <button id="openmodal" type="button">Abrir modal</button>


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
        <div id="solicitud" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <h2 class="align-center">Seleccionar Servicio</h2>
                        <hr />
                        <form action="../clAutomaticarController/agendaController.php" method="post">
                            <div id="fecha" name="horas"></div>
                            <input id="hInicio" type="hidden" name="horaInicio">
                            <input id="hTermino" type="hidden" name="horatermino">
                            <input id="fAgenda" type="hidden" name="fecha">
                            <input type="hidden" value='"<?= print_r($user['cli_email']) ?>"' name="identificacion"/>
                            <div class="field half">
                                <label for="dept">¿Que servicio necesita?</label>
                                <div class="select-wrapper">
                                    <select class="form-control" name="dept" id="servicios">
                                        <option>--selecciona un servicio--</option>
                                        <?= ServicioDAO::FindAllServices() ?>
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
                                    <div class="select-wrapper">
                                        <label for="dept">Comuna</label>
                                        <select class="form-control" name="dept" id="dept">
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
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary button special" name="horaA">Agendar hora</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">

        $(function () {
            $("#openmodal").click(function () {
                $('#solicitud').modal('show');
            })
            var serviceSelected = <?= (isset($_SESSION['serviceid'])) ? $_SESSION['serviceid'] : 0; ?>


            $("#servicios option[value=" + serviceSelected + "]").attr("selected", true);

        });
    </script>
    <?= var_dump($user); ?>
</html>
