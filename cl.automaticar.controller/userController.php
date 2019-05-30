<?php
session_start();
include '../cl.automaticar.DAO/UserDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$userName = $_POST['username'];
$userPass = $_POST['userpass'];
echo 'recibidos';
if (empty($userName) || empty($userPass)) {
    header("Location: http://localhost:81/TrabajoFinal/index.php");   
}else{
    echo 'vamos';
$userDAO = new UserDAO();
$us = $userDAO->login($userName, $userPass);
if ($us != NULL) {
    echo 'funciona';
    //$ux=$us;
    //echo $ux;
    include(' ../cl.automaticar.view/InicioCliente.php');
}else{
    echo 'no funciona';
}
}
?>