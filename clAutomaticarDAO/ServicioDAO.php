<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../clAutomaticarData/Servicio.php';
include '../clAutomaticarData/conexion.php';

class ServicioDAO{
    public static function findAllMantencion() {
        $conexion = new Conexion();
        $sql="SELECT * FROM servicios WHERE SERVICIO_tipo='mantencion' AND SERVICIO_estado=1";
        $result= mysqli_query($conexion->conn(), $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>";
            echo "<a href='../clAutomaticarController/ServicioController.php?ser=".$row["SERVICIOS_id"]."'>".$row["SERVICIO_nombre"]."</a>";
            echo "</br>";
            echo "</li>";
        }
        //return $se;
    }
    public static function findAllReparacion() {
        $conexion = new Conexion();
        $sql="SELECT * FROM servicios WHERE SERVICIO_TIPO='reparacion' AND SERVICIO_estado=1;";
        $result = mysqli_query($conexion->conn(), $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>";
            echo "<a href='../clAutomaticarController/ServicioController.php?ser=".$row["SERVICIOS_id"]."'>".$row["SERVICIO_nombre"]."</a>";
            echo "</br>";
            echo "</li>";
        }
        //return $se;
    }
}
