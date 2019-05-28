<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Administrador{
    private $administrador_id;
    private $administrador_nombre;
    private $administrador_apellido_p;
    private $administrador_mail;
    private $administrador_contraseña;
    private $cuenta_cuenta_id;
    
    function getAdministrador_id() {
        return $this->administrador_id;
    }

    function getAdministrador_nombre() {
        return $this->administrador_nombre;
    }

    function getAdministrador_apellido_p() {
        return $this->administrador_apellido_p;
    }

    function getAdministrador_mail() {
        return $this->administrador_mail;
    }

    function getAdministrador_contraseña() {
        return $this->administrador_contraseña;
    }

    function getCuenta_cuenta_id() {
        return $this->cuenta_cuenta_id;
    }

    function setAdministrador_id($administrador_id) {
        $this->administrador_id = $administrador_id;
    }

    function setAdministrador_nombre($administrador_nombre) {
        $this->administrador_nombre = $administrador_nombre;
    }

    function setAdministrador_apellido_p($administrador_apellido_p) {
        $this->administrador_apellido_p = $administrador_apellido_p;
    }

    function setAdministrador_mail($administrador_mail) {
        $this->administrador_mail = $administrador_mail;
    }

    function setAdministrador_contraseña($administrador_contraseña) {
        $this->administrador_contraseña = $administrador_contraseña;
    }

    function setCuenta_cuenta_id($cuenta_cuenta_id) {
        $this->cuenta_cuenta_id = $cuenta_cuenta_id;
    }

    function __construct($administrador_nombre, $administrador_apellido_p, $administrador_mail, $administrador_contraseña, $cuenta_cuenta_id) {
        $this->administrador_nombre = $administrador_nombre;
        $this->administrador_apellido_p = $administrador_apellido_p;
        $this->administrador_mail = $administrador_mail;
        $this->administrador_contraseña = $administrador_contraseña;
        $this->cuenta_cuenta_id = $cuenta_cuenta_id;
    }

}
