<?php
include '../cl.automaticar.data/user.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UserDAO{
    public function login($mail, $pass){
        $u= new User(); 
        $conexion = mysqli_connect('localhost','root','','automaticar');
        $sql ="SELECT * FROM usuario WHERE USUARIO_mail='$mail' and USUARIO_constraseña='$pass'";
        $result = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_object($result);
        print_r($row); exit;
        if($row =! NULL){
            //$u= new User($registros->);
            echo 'usuario encontrado';
        }else{
        }
        return u;
    }
    public function agregarUsuario($nombre, $apellidoP, $apellidoM, $mail, $contraseña, $cuenta_cuentaId) {
       $conexion = mysqli_connect('localhost', 'root', '', 'automaticar');
       $exquery="SELECT * FROM usuario WHERE USUARIO_mail='$mail'";
       $sql = "INSERT INTO usuario (USUARIO_id, USUARIO_nombre, USUARIO_apellido_p, USUARIO_apellido_m, USUARIO_mail, USUARIO_contraseña, CUENTA_CUENTA_id)values('$nombre', '$apellidoP', '$apellidoM','$mail','$contraseña','$cuenta_cuentaId');";
       $comprobacion= mysqli_query($conexion, $exquery);
       if ($comprobacion =! null) {
           $result= mysqli_query($conexion, $sql);
       }else{
           
       }
       
    }
}

