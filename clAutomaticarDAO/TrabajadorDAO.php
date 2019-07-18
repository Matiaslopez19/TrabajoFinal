<?php
include_once '../clAutomaticarData/Conexion.php';
include '../clAutomaticarData/Trabajador.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrabajadorDAO
 *
 * @author sebastian
 */
class TrabajadorDAO {
    public function InsertarTrabajador($nombre, $email, $apellidos, $clave, $estado){
        $t=null;
        $conexion= Conexion::conn();
        $query = "select max(tra_id+1) as id from  trabajador";
        $exquery ="SELECT * FROM trabajador WHERE tra_email='".$email."';";
        $comprobacion = mysqli_query($conexion, $exquery);
        $resComprob = mysqli_fetch_object($comprobacion);
        if ($resComprob==false) {
            $laId= mysqli_query($conexion, $query);
            $ultimoInsertado= mysqli_fetch_object($laId);
            $sql="INSERT INTO trabajador (tra_id, tra_nombre, tra_email, tra_apellidos, "
                . "tra_clave, tra_estado) VALUES (".$ultimoInsertado->id.",'".$nombre."', '".$email."', "
                . "'".$apellidos."', '".$clave."', ".$estado.");";
            //print_r($sql);exit;
            $nuevoResult= mysqli_query($conexion, $sql);
            if (!is_null($nuevoResult)) {
                $t = true;
            }else{
                $t=NULL;
            }
            $t=null;
        }
        return $t;
    }
    public static function findTrabajadoreDisponibles() {
        $conexion = new Conexion();
        $query = "SELECT * FROM trabajador where tra_estado=1;";
        $resultado = mysqli_query($conexion::conn(), $query);
        while ($row = mysqli_fetch_array($resultado)){
            echo "<option value='".$row['tra_id']."' name='trabajador'>".$row['tra_nombre']." ".$row['tra_apellidos']." </option>";
        }
    }
    public static function findTrabajadoreDisponibles2() {
        $conexion = new Conexion();
        $query = "SELECT * FROM trabajador where tra_estado=1;";
        $resultado = mysqli_query($conexion::conn(), $query);
        while ($row = mysqli_fetch_array($resultado)){
            echo "<tr><form action='../clAutomaticarContorller/agendaController.php'><input type='hidden' value=".$row['tra_id']." name='id'><td>".$row['tra_nombre']."</td><td>"
                    . "".$row['tra_apellidos']."</td><td>".$row['tra_email']."</td><td><button type='submit' class='btn btn-primary button special' name='eliminar'>Eliminar</button></td></form></tr>";
        }
    }
    public function EliminarTrabajador($id){
        $sql="DELETE FROM trabajador WHERE tra_id=".$id.";";
        $conexion = Conexion::conn();
        $comprobacion = null;
        $resultado= mysqli_query($conexion, $sql);
        if (!is_null($resultado)) {
            $comprobacion= true;
        }
        return $comprobacion;
    }
}
