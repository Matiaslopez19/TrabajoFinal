<?php
include '../clAutomaticarData/Comuna.php';
require_once '../clAutomaticarData/conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComunaDAO
 *
 * @author sebastian
 */
class ComunaDAO {
    //put your code here
    public static function FindAllComunas(){
        $conexion = new Conexion();
        $sql= "SELECT * FROM comunas";
        $result = mysqli_query($conexion::conn(), $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='".$row["com_id"]."' name='comuna'>".$row["com_nombre"]."</option>";
        }
    }
}
