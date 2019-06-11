<?php
session_start();
include '../clAutomaticarDAO/UserDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['2'])) { //se revisa el name del boton del formulario
    if (!isset($_POST['username'])) { //se verifica si el campo de nombre esta lleno o vacio
        include('../clAutomaticarView/Login.php');// si no esta lleno, te redireccionara al index
    } else {
        $userName = $_POST['username'];//toma el mail
        $userPass = $_POST['userpass'];//toma la clave
        $userDAO = new UserDAO();//llama a la clase DAO
        $us = $userDAO->login($userName, $userPass);
        //var_dump($us);
        if ($us) {
            $_SESSION['user'] = $us;
            include('../clAutomaticarView/SeleccionarServicio.php');
        } else {
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