<?php
     //session_start();
     //include '../clAutomaticarData/Servicio.php';
     //include '../clAutomaticarDAO/ServicioDAO.php';
     /*if (!$_SESSION["user"]) {
    
}*/
//echo $id;
if (isset($_GET['ser'])) {
    setcookie("serviceid", $_GET['ser']);
    if (isset($_SESSION['user'])) {
        include '../clAutomaticarView/SeleccionarServicio.php#one';
    } else {
        include '../clAutomaticarView/Login.php';
    }
}else{
    echo "ne necesita seleccionar un servicio primero";
}
