<?php

session_start();
include '../cl.automaticar.DAO/UserDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!isset($_POST['username'])) {
        header("Location: http://localhost:81/TrabajoFinal/cl.automaticar.view/index.php");
} else {
    $userName = $_POST['username'];
    $userPass = $_POST['userpass'];
    $userDAO = new UserDAO();
    $us = $userDAO->login($userName, $userPass);
    if ($us != NULL) {
        include('../cl.automaticar.view/InicioCliente.php');
    } else {
        $error = "Usuario o contraseña incorrecta";
        include('../cl.automaticar.view/login.php');
    }
}
?>