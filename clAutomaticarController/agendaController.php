<?php
session_start();
include '../clAutomaticarDAO/agendarDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. cambié weás
 */ 
$servicio = $_POST['servicio'];
//$opcion = $_POST['opcion'];
$patente = $_POST['patente'];
$comuna = $_POST['comuna'];
$lugar = $_POST['direccion'];
$cliente= $_POST['identificacion'];
$fecha= $_POST['fecha'];
$estado= 1;
$disponibilidad=1;
$horaInicio=$_POST['horaInicio'];
$horaTermino=$_POST['horatermino'];
$fInicio = $fecha." ".$horaInicio;
$fTermino= $fecha." ".$horaTermino;
echo $fInicio;
echo $fTermino;
$agendarDao= new AgendarDAO();
$ag = $agendarDao->AgregarAgenda($estado, $patente, $comuna, $lugar, $fInicio, $servicio, 
        $cliente, $cliente, $patente, $lugar);
if (!is_null($ag)) {
    echo 'se agrego a la base';
    include '../clAutomaticarView/SeleccionarServicio.php';
}else{
    echo 'no se agrego';
    include '../clAutomaticarView/SeleccionarServicio.php';
}

