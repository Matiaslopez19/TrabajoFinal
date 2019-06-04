<?php
$conexion = mysqli_connect("localhost", "root", "", "automaticar") or
                die("Problemas con la conexión");
// esto sería para mostrar las horas agendadas
$servicios = mysqli_query($conexion, "select AGENDAR_hora,AGENDAR_fecha,AGENDAR_tipo_servicio,AGENDAR_patente,AGENDAR_direccion"
        . ",AGENDAR_ruta_foto,AGENDAR_region from agendar") or
                die("Problemas en el select:" . mysqli_error($conexion));
$user = $_SESSION['user'] ;
        while ($reg = mysqli_fetch_array($servicios)) {
            echo "Hora: " . $reg['AGENDAR_hora'] . "<br>";
            echo "Fecha: " . $reg['AGENDAR_fecha'] . "<br>";
            echo "Servicio: " . $reg['AGENDAR_tipo_servicio'] . "<br>";
            echo "Patente: " . $reg['AGENDAR_patente'] . "<hr>";
            echo "Dirección: " . $reg['AGENDAR_direccion'] . "<hr>";
        }