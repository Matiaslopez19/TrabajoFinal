<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UserDAO{
public function login(string $mail, string $pass){
    $conexion = mysqli_connect('localhost','root','','automaticar');
    $sql ="SELECT * FROM USUARIO WHERE USUARIO_mail=$mail and USUARIO_constraseña=$pass";
    
    
}

}

