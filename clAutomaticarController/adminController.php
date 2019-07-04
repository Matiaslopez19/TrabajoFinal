<?php
session_start();
include '../clAutomaticarDAO/UserDAO';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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