<?php
session_start();
include '../clAutomaticarDAO/UserDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['2'])) {
    if (!isset($_POST['username'])) {
        header("Location: http://localhost:81/TrabajoFinal/clAutomaticarView/index.php");
    } else {
        $userName = $_POST['username'];
        $userPass = $_POST['userpass'];
        //echo 'recibidos';
        $userDAO = new UserDAO();
        //var_dump($userDAO);
        $us = $userDAO->login($userName, $userPass);
        if ($us != NULL) {
            //echo 'ingreso exitoso';
            $_SESSION['user'] = $us;
            include('../clAutomaticarView/InicioCliente.php');
        } else {
            $error = "Usuario o contraseña incorrecta";
            include('../clAutomaticarView/Login.php');
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
        if ($userpass1 == $userpass2) {
            $userDAO2 = new UserDAO();
            $us = $userDAO2->agregarUsuario($nombre, $apellidoP, $apellidoM, $email, $userpass1, $userAccountType);
            if ($us != NULL) {
                $_SESSION['user']=$us;
                include ('../clAutomaticarView/InicioCliente.php');
            } else {
                $errorRegistro = "error en los datos";
                include ('../clAutomaticarView/crearCuenta.php');
            }
        }
    }
?>