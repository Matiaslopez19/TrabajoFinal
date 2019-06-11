<?php
     session_start();
    
if (isset($_GET['ser'])) {
    //setcookie("serviceid", $_GET['ser'],60);
    $_SESSION['serviceid'] = $_GET['ser'];
    if (isset($_SESSION['user'])) {
        include '../clAutomaticarView/SeleccionarServicio.php';
    } else {
        include '../clAutomaticarView/Login.php';
    }
}else{
    echo "ne necesita seleccionar un servicio primero";
}
