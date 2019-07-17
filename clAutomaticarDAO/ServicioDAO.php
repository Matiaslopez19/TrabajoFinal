<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../clAutomaticarData/Servicio.php';
require_once '../clAutomaticarData/conexion.php';
class ServicioDAO{
    public static function findAllMantencion() {
        $conexion = new Conexion();
        $sql="SELECT * FROM servicio WHERE ser_tipo='mantencion' AND ser_estado=1";
        $result= mysqli_query($conexion::conn(), $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>";
            echo "<a href='../clAutomaticarController/serviciosController.php?ser=".$row["ser_id"].">".$row["ser_nombre"]."</a>";
            echo "</br>";
            echo "</li>";
        }
        //return $se;
    }
    public static function findAllReparacion() {
        $conexion = new Conexion();
        $sql="SELECT * FROM servicio WHERE ser_tipo='reparacion' AND ser_estado=1;";
        $result = mysqli_query($conexion::conn(), $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>";
            echo "<a href='../clAutomaticarController/serviciosController.php?ser=".$row["ser_id"]."'>".$row["ser_nombre"]."</a>";
            echo "</br>";
            echo "</li>";
        }
        //return $se;
    }
    public static function FindAllServices(){
        $conexion = new Conexion();
        $sql ="SELECT * FROM servicio WHERE ser_estado=1;";
        $result = mysqli_query($conexion::conn(), $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='".$row["ser_id"]."' name='servicio'>".$row["ser_nombre"]."</option>";
        }
    }
}
