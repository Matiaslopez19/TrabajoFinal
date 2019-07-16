<?php
session_start();
//include '../clAutomaticarDAO/UserDAO';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
if (isset($_POST['2'])) {//verifica si viene desde la pagina de Login.php
//inicio login administrador
$adm_nombre = $_POST['username'];
$adm_clave = $_POST['userpass'];
$userdao = new UserDAO();
$u = $userdao->LoginAdmin($adm_nombre, $adm_clave);
if (!is_null($u)) {
    $_SESSION['administrador']= $u;
    include('../clAutomaticarView/InicioAdmin.php');
}else{
    include('../clAutomaticarView/Login.php');
}//fin de login administrador

}else{
    
}
 */
if(isset($_GET['action']) && is_numeric($_GET['action'])){
    $valor= $_GET['action'];
    switch ($valor){
        case 1: 
            include('../clAutomaticarView/AsignarMecanico.php');
            break;
        case 2:
            include('../clAutomaticarView/CrearCuentaM.php');
            break;
        case 3:
            include('../clAutomaticarView/EliminarTrabajador.php');
            break;
        case 4:
            include('../clAutomaticarView/SubirHistorial.php');
            break;
        default :
            header('Location: http://localhost:81/TrabajoFinal/clAutomaticarController/userController.php');
    }
}

