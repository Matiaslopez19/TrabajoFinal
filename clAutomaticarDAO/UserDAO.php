<?php

include '../clAutomaticarData/User.php';
include '../clAutomaticarData/conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserDAO {

    public function LoginAdmin($mail, $pass) {
        $u = null;
        $conexion = new Conexion();
        $sql = "SELECT * FROM administrador WHERE adm_usuario='$mail' AND adm_clave='$pass'";
        $result = mysqli_query($conexion->conn(), $sql);
        if ($result->num_rows == 1) {
            $row = mysqli_fetch_array($result);
            $u = $row;
        } else {
            
        }
        return $u;
    }

    public function InsertarTrabajador() {
        $u= null;
        $conexion = new Conexion();
        $sql="INSERT INTO trabajadores WHERE() VALUES();";
        $exquery="SELECT * FROM trabajadores WHERE tra_email='$mail';";
        $comprobacion= mysqli_query($conexion->conn(), $exquery);
        $resultado = mysqli_fetch_array($comprobacion);
        if (is_null($resultado)) {
            $result= mysqli_query($conexion->conn(), $sql);
            if (!is_null($result)) {
              $u=true;  
                
            }
            return $u;
    }
    }
    public function login($mail, $pass) {
        $u = null;
        $conexion = new Conexion();
        $sql = "SELECT * FROM cliente WHERE cli_email ='$mail' AND cli_clave='$pass';";
        $result = mysqli_query($conexion->conn(), $sql);
        if ($result->num_rows == 1) {
            //var_dump($result);
            $row = mysqli_fetch_array($result);
            $u = $row;
        } else {
            
        }
        return $u;
    }
    public function agregarUsuario($nombre, $apellidos, $mail, $clave, $cuenta_cuentaId) {
        $u = null;
        $conexion = new Conexion();
        $exquery = "SELECT * FROM cliente WHERE cli_mail='$mail';";
        $sql = "INSERT INTO cliente (cli_nombre, cli_mail, cli_apellidos, cli_clave, cli_tipo) VALUES ('$nombre','$mail','$apellidos',$clave',$cuenta_cuentaId);";
        $comprobacion = mysqli_query($conexion->conn(), $exquery);
        $resultado = mysqli_fetch_object($comprobacion);
        if (is_null($resultado)) {
            $result = mysqli_query($conexion->conn(), $sql);
            $query = "select max(cli_id) as id from  cliente";
            $resultado = mysqli_query($conexion, $query);
            $ultimoIsertado = mysqli_fetch_object($resultado);
            if (!is_null($result)) {
                $u = new User($ultimoIsertado->id, $nombre, $mail, $apellidos, $clave, $cuenta_cuentaId);
            } else {
                
            }
        } else {
         
        }
        return $u;
    }

    public function eliminarUsuario($mail) {
        $conexion = new Conexion();
        $exquery = "SELECT * FROM cliente WHERE cli_mail='$mail';";
        $sql = "DELETE FROM cliente WHERE cli_email='$mail';";
        $comprobacion = mysqli_query($conexion->conn(), $exquery);
        $u = null;
        if (is_null($comprobacion)) {
            $resultado = mysqli_query($conexion, $sql);
            $u = true;
        } else {
            
        }
        return $u;
    }

    public function eliminarTrabajador($mail) {
        $u = null;
        $conexion = new Conexion();
        $query = "DELETE FROM trabajador where tra_email='$mail';";
        $resultado = mysqli_query($conexion->conn(), $query);
        if (!is_null($resultado)) {
            $u = true;
        }
        return $u;
    }

    public function findAllTrabajadores() {
        $conexion = new Conexion();
        $query = "SELECT * FROM trabajadores;";
        $resultado = mysqli_query($conexion->conn(), $query);
        while ($row = mysqli_fetch_array($resultado)){
            echo "<option value='".$row['tra_email']."' name='trabajador'>".$row['tra_nombre']."</option>";
        }
    }

    public function findTrabajadoreDisponibles() {
        $conexion = new Conexion();
        $query = "SELECT * FROM trabajadores where tra_estado='disponible';";
        $resultado = mysqli_query($conexion->conn(), $query);
        while ($row = mysqli_fetch_array($resultado)){
            echo "<option value='".$row['tra_email']."' name='trabajador'>".$row['tra_nombre']."</option>";
        }
    }

}

?>
