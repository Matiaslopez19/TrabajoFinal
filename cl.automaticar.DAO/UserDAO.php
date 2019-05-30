<?php
include '../cl.automaticar.data/User.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UserDAO{
    public function login($mail, $pass){
        $u= null; 
        $conexion = mysqli_connect('localhost','root','','automaticar');
        $sql ="SELECT * FROM usuario WHERE USUARIO_mail='$mail' and USUARIO_clave='$pass'";
        $result = mysqli_query($conexion, $sql);
        //var_dump($result);exit;
        if($result){
            $row = mysqli_fetch_array($result);
            $u = new User($row["USUARIO_nombre"], 
                    $row["USUARIO_apellido_p"], $row["USUARIO_apellido_m"], 
                    $row["USUARIO_mail"], $row["USUARIO_clave"],
                    $row["CUENTA_CUENTA_id"]);            
        }else{
            echo "no hubo resultados";
        }
        return $u;
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
?>
