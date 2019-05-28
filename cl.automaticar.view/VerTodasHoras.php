<?php
   include_once  '../cl.automaticar.controller/serviciosController.php';
   
   ?>


<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table>
            <?php while ($reg = mysqli_fetch_array(getAgendar())): ?>
            <tr>
                <td><?=$reg['AGENDAR_hora'] ?></td>
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

    
    