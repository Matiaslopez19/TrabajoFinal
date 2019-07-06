<!DOCTYPE html>
<?php
session_start();
include '../clAutomaticarDAO/ServicioDAO.php';
$adm = $_SESSION['administrador'];
?>
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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>AutomatiCar</title>


        <!-- Bootstrap core CSS -->
        <link href="../assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Custom styles for this template -->
        <link href="../assets/css/simple-sidebar.css" rel="stylesheet" type="text/css"/>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var initialTimeZone = 'es-CL';//creditos a vicente del campo y kevin leyton por la idea
                var timeZoneSelectorEl = document.getElementById('time-zone-selector');
                var loadingEl = document.getElementById('loading');
                var calendarEl = document.getElementById('calendar');
                //var momento = moment.tz('America/Santiago'); 
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['interaction', 'dayGrid', 'timeGrid'],
                    timeZone: initialTimeZone,
                    locale: 'es',
                    eventDurationEditable: false,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek',

                    },
                    defaultDate: '2019-06-12',
                    navLinks: true, // can click day/week names to navigate views
                    editable: false, //permite modificar el lugar de los eventos en el calendario
                    selectable: true,
                    //eventLimit: true, // permite mantener 2 o mas horas al mismo tiempo
                    events: {
                        url: 'http://localhost:81/TrabajoFinal/clAutomaticarController/EventosCalendarioNoEdicion.php',
                        failure: function () {
                            //document.getElementById('script-warning').style.display = 'inline'; // show
                        }

                    },
                    loading: function (bool) {
                        /*if (bool) {
                            loadingEl.style.display = 'inline'; // show
                        } else {
                            loadingEl.style.display = 'none'; // hide
                        }*/
                    },

                    //eventTimeFormat: {hour: 'numeric', minute: '2-digit', timeZoneName: 'short'},
                    eventDragStop: function (e) {
                        alert("horas: " + moment(e.event.start).format("YYYY-MM-DD") + " y " + moment(e.event.end).format("HH:mm:ss"));
                    },
                    dateClick: function (arg) {
                        console.log('dateClick', calendar.formatIso(arg.date));
                    },
                    eventClick: function (e) {
                        $("#borrar").modal('show');
                        $("#idCliente").empty();
                        $("#idCliente").val(e.event.id);
                    },
                    select: function (arg) {
                        //console.log('select', calendar.formatIso(arg.start), calendar.formatIso(arg.end));

                        $("#solicitud").modal('show');
                        $("#fecha").empty();
                        $("#fecha").append("<span>Día:" + moment(arg.start).format("YYYY-MM-DD") + "hora inicio:" + moment(arg.start).format("HH:mm:ss") + "hora termino:" + moment(arg.end).format("HH:mm:ss") + "</span>");
                        //alert("Ha elegido el día: "+moment(arg.start).format("YYYY-MM-DD")+", a la hora de: "+moment(arg.start).format("hh:mm:ss")+" y con hora de termino de: "+moment(arg.end).format("hh:mm:ss"));
                        $("#fAgenda").val(moment(arg.start).format("YYYY-MM-DD"));
                        $("#hInicio").val(moment(arg.start).format("HH:mm:ss"));
                        $("#hTermino").val(moment(arg.end).format("HH:mm:ss"));
                    }
                });

                calendar.render();

                // load the list of available timezones, build the <select> options
                // it's HIGHLY recommended to use a different library for network requests, not this internal util func
                /*FullCalendar.requestJson('GET', '../assets/fullcalendar/demos/php/get-time-zones.php', {}, function (timeZones) {
         
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
                 });*/

                // when the timezone selector changes, dynamically change the calendar option
                /*timeZoneSelectorEl.addEventListener('change', function () {
                 calendar.setOption('timeZone', this.value);
                 });*/
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
                <div class="sidebar-heading"><a href="index.php"><img src="../images/Captura.png" width="183px" height="130px"/></a></div>
                <div class="list-group list-group-flush">
                    <a href="AsignarMecanico.php" class="list-group-item list-group-item-action bg-light">Asignar Trabajador</a>
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
                    <h1 class="mt-4"></h1>
                      <div id='calendar'></div>
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
