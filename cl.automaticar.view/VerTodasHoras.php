<?php
   include  '../cl.automaticar.controller/serviciosController.php';
   
   ?>
<html>
    <head>
        <title>Empecé a editar aquí jiji</title>
    </head>
    <body>
        <table>
            <?php while ($reg = mysqli_fetch_array(getAgendar())): ?>
            <tr>
                <td>Hora<?=$reg['AGENDAR_hora']?></td>
            </tr>
            <tr>
                <td>Fecha<?=$reg['AGENDAR_fecha']?></td>
            </tr>
            <tr>
                <td>Servicio<?=$reg['AGENDAR_tipo_servicio']?></td>
            </tr>
            <tr>
                <td>Patente<?=$reg['AGENDAR_patente']?></td>
            </tr>
            <tr>
                <td>Dirección<?=$reg['AGENDAR_comuna']?></td>
            </tr>
            <tr>
                <td>Dirección<?=$reg['AGENDAR_direccion']?></td>
            </tr>
             <?php endwhile;?>
            <!--
                echo "Hora: " . $reg['AGENDAR_hora'] . "<br>";
            echo "Fecha: " . $reg['AGENDAR_fecha'] . "<br>";
            echo "Servicio: " . $reg['AGENDAR_tipo_servicio'] . "<br>";
            echo "Patente: " . $reg['AGENDAR_patente'] . "<hr>";
            echo "Dirección: " . $reg['AGENDAR_direccion'] . "<hr>";
        }?>
            -->
        </table>
    </body>
</html>

    
    