<?php
     session_start();
     include '../clAutomaticarData/Servicio.php';
     include '../clAutomaticarDAO/ServicioDAO.php';
     /*if (!$_SESSION["user"]) {
    
}*/
//echo $id;
if (isset($_GET['ser'])) {
    $id=$_GET['ser'];
}
