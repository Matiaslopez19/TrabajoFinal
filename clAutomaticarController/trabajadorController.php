<?php
session_start();
include '../clAutomaticarDAO/TrabajadorDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $aMaterno = $_POST['apellidoM'];
    $aPaterno = $_POST['apellidoP'];
    $apellidos = $aPaterno." ".$aMaterno;
    $clave= $_POST['userpass1'];
    $secClave = $_POST['userpass2'];
    $estado= 1;
    if ($clave == $secClave) {
        $trabajador = new TrabajadorDAO();
        $arreglo = $trabajador->InsertarTrabajador($nombre, $email, $apellidos, $clave, $estado);
        if (!is_null($arreglo)) {
            //$_SESSION = $arreglo;
            include ('../clAutomaticarView/CrearCuentaM.php');
        }else{
            include ('../clAutomaticarView/CrearCuentaM.php');
        }
    }
}elseif (isset ($_POST['eliminar'])) {
    $id= $_POST['id'];
    $trabajo = new TrabajadorDAO();
    $cosa = $trabajo->EliminarTrabajador($id);
    if (!is_null($cosa)) {
        include('../clAutomaticarView/EliminarTrabajador.php');
    }else{
        include('../clAutomaticarView/EliminarTrabajador.php');
    }
}
