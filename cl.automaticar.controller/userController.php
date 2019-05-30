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
    echo 'tiene el mail';
    $userPass = $_POST['userpass'];
    echo 'tiene la clave';
    $userDAO = new UserDAO();
    $us = $userDAO->login($userName, $userPass);
    echo 'tiene el tiene el login';
    if ($us != NULL) {
        include('../cl.automaticar.view/InicioCliente.php');
    } else {
        $error = "Usuario o contraseña incorrecta";
        include('../cl.automaticar.view/login2.php');
    }
}
?>