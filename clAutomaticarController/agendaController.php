<?php
session_start();
include '../clAutomaticarDAO/agendarDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. cambié weás
 */ 
if(isset($_POST['horaA'])){
 $servicio = $_POST['servicio'];
//$opcion = $_POST['opcion'];

$comuna = $_POST['comuna'];
$lugar = $_POST['direccion'];
//$cliente= $_POST['identificacion'];
$cliente = 1;
$fecha= $_POST['fecha'];
$estado= 1;
$disponibilidad=1;
$horaInicio=$_POST['horaInicio'];
$horaTermino=$_POST['horatermino'];
$fInicio = $fecha." ".$horaInicio;
$fTermino= $fecha." ".$horaTermino;
//$fInicio= new DateTime();
//$fTermino= new DateTime();
//$fInicio->modify("+4 hours");
//$fTermino->modify("+4 hours");

//print_r($fInicio);
//print_r($fTermino);exit;
$agendarDao= new AgendarDAO();
$ag = $agendarDao->AgregarAgenda($estado,$lugar, $fInicio, $servicio, $cliente, $disponibilidad, 
        $fTermino, $comuna);
if (!is_null($ag)) {
    //echo 'se agrego a la base';
    include '../clAutomaticarView/SeleccionarServicio.php';
}else{
    include '../clAutomaticarView/SeleccionarServicio.php';
}
}else if(isset($_POST['delete'])) {
    $id=$_POST['idCliente'];
    $eliminar= new AgendarDAO();
    $resul = $eliminar->deleteEvent($id);
    if(!is_null($resul)){
        include '../clAutomaticarView/SeleccionarServicio.php';
    }
}else if(isset ($_POST['asignarA'])){
    
}
