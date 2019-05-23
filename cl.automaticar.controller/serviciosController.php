<?php
$conexion = mysqli_connect("localhost", "root", "", "automaticar") or
                die("Problemas con la conexión");
// esto sería para mostrar las horas agendadas
$servicios = mysqli_query($conexion, "select AGENDAR_hora,AGENDAR_fecha,AGENDAR_tipo_servicio,AGENDAR_patente,AGENDAR_direccion"
        . ",AGENDAR_ruta_foto,AGENDAR_region from agendar") or
                die("Problemas en el select:" . mysqli_error($conexion));
// 
        while ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre del post:" . $reg['post_nombre'] . "<br>";
            echo "Descripción:" . $reg['post_descg'] . "<br>";
            echo "<br>";
            echo "<hr>";
        }