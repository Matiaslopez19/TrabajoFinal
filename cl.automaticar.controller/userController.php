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
if (empty($userName) || empty($userPass)) {
    header("Location: http://localhost:81/TrabajoFinal/index.php");   
}else{
$userDAO = new UserDAO();
$us = $userDAO->login($userName, $userPass);
if (u != NULL) {
    $ux=u;
    include('InicioCliente.php');
}else{
    
}
}
?>