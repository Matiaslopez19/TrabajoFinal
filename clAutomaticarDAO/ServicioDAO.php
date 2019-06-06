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
        $conexion= new Conexion();
        $se=null;
        $sql="SELECT * FROM servicios where se_tipo= 1";
        $result= mysqli_query($conexion->conn(), $sql);
        if ($result->num_rows >=1) {
            $row= mysqli_fetch_array($result);
            $se= new Servicio($row[se_id], $row["se_nombre"], $row["se_tipo"], $row["se_estado"]);
        }
        return $se;
    }
}
