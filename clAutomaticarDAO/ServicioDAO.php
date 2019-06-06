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
        $se=[];
        $sql="SELECT * FROM servicios WHERE SERVICIO_tipo='mantencion' AND SERVICIO_estado=1";
        $result= mysqli_query($conexion->conn(), $sql);
        if ($result->num_rows >=1) {
            $row= mysqli_fetch_array($result);
            $se[]= new Servicio($row["SERVICIOS_id"], $row["SERVICIO_nombre"], $row["SERVICIO_tipo"], $row["SERVICIO_estado"]);
        }
        return $se;
    }
    public static function functionName() {
        $conexion = new Conexion();
        $se=[];
        $sql="SELECT * FROM servicios WHERE SERVICIO_TIPO='reparacion' AND SERVICIO_estado=1;";
        $result = mysqli_query($conexion->conn(), $sql);
        if ($result->num_rows >=1) {
            $row = mysqli_fetch_array($result);
            $se[]= new Servicio($row["SERVICIOS_id"], $row["SERVICIO_nombre"], 
                    $row["SERVICIO_tipo"], $row["SERVICIO_estado"]);
        }
        return $se;
    }
}
