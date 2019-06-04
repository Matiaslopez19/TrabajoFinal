<?php

session_start();
include '../cl.automaticar.DAO/UserDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['2'])) {
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
            include('../cl.automaticar.view/login2.php');
        }
    }
} else if (isset($_POST['1'])) {
        $nombre = $_POST['nombre'];
        $apellidoP = $_POST['apellidoP'];
        $apellidoM = $_POST['apellidoM'];
        $email = $_POST['email'];
        $userpass1 = $_POST['userpass1'];
        $userpass2 = $_POST['userpass2'];
        $userAccountType = 3;
        echo 'datos recibidos bien';
        if ($userpass1 == $userpass2) {
            $userDAO2 = new UserDAO();
            $us = $userDAO2->agregarUsuario($nombre, $apellidoP, $apellidoM, $email, $userpass1, $userAccountType);
            if ($us != NULL) {
                include ('../cl.automaticar.view/InicioCliente.php');
            } else {
                $errorRegistro = "error en los datos";
                include ('../cl.automaticar.view/crearCuenta.php');
            }
        } else {
            $errorClave = "las contraseñas no coinciden";
        }
    }

?>