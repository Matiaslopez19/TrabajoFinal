<?php
include '../clAutomaticarData/User.php';
include '../clAutomaticarData/conexion.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UserDAO{
    public function login($mail, $pass){
        $u= null; 
        $conexion = new Conexion();
        $sql ="SELECT * FROM cliente WHERE cli_email ='$mail' AND cli_clave='$pass';";
        $result = mysqli_query($conexion->conn(), $sql);
        if($result->num_rows == 1){
             //var_dump($result);
            $row = mysqli_fetch_array($result);
            $u  = $row;
            //$u = new User($row["cli_id"], $row["cli_nombre"], 
              //      $row["cli_email"], $row["cli_apellidos"], $row["cli_clave"],
                //    $row["cli_tipo"]);
        }else{
           echo "no hubo resultados";
            var_dump($result);
        }
        return $u;
        }
    public function agregarUsuario($nombre, $apellidos, $mail, $clave, $cuenta_cuentaId) {
       $u = null;
       $conexion = new Conexion();
       $exquery="SELECT * FROM cliente WHERE cli_mail='$mail';";
       $sql = "INSERT INTO cliente (cli_nombre, cli_mail, cli_apellidos, cli_clave, cli_tipo) VALUES ('$nombre','$mail','$apellidos',$clave',$cuenta_cuentaId);";
       $comprobacion= mysqli_query($conexion->conn(), $exquery);
       $resultado = mysqli_fetch_object($comprobacion);
       if(is_null($resultado)){
           $result= mysqli_query($conexion->conn(), $sql);
           $query =  "select max(cli_id) as id from  cliente";
           $resultado = mysqli_query($conexion, $query);
           $ultimoIsertado = mysqli_fetch_object($resultado);
           if (!is_null($result)) {
               $u = new User($ultimoIsertado->id,$nombre,
                       $mail, $apellidos,
                       $clave,$cuenta_cuentaId);
           }else{
           
           }
       }else{
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
            $resultado= mysqli_query($conexion, $sql);
        }else{
        }
    }
}
?>
