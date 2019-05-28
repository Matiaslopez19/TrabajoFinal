<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Trabajador{
    private $trabajador_id;
    private $trabajador_nombre;
    private $trabajador_apellido_p;
    private $trabajador_apellido_m;
    private $trabajador_mail;
    private $trabajador_contraseña;
    private $cuenta_cuenta_id;
    
    function getTrabajador_id() {
        return $this->trabajador_id;
    }

    function getTrabajador_nombre() {
        return $this->trabajador_nombre;
    }

    function getTrabajador_apellido_p() {
        return $this->trabajador_apellido_p;
    }

    function getTrabajador_apellido_m() {
        return $this->trabajador_apellido_m;
    }

    function getTrabajador_mail() {
        return $this->trabajador_mail;
    }

    function getTrabajador_contraseña() {
        return $this->trabajador_contraseña;
    }

    function getCuenta_cuenta_id() {
        return $this->cuenta_cuenta_id;
    }

    function setTrabajador_id($trabajador_id) {
        $this->trabajador_id = $trabajador_id;
    }

    function setTrabajador_nombre($trabajador_nombre) {
        $this->trabajador_nombre = $trabajador_nombre;
    }

    function setTrabajador_apellido_p($trabajador_apellido_p) {
        $this->trabajador_apellido_p = $trabajador_apellido_p;
    }

    function setTrabajador_apellido_m($trabajador_apellido_m) {
        $this->trabajador_apellido_m = $trabajador_apellido_m;
    }

    function setTrabajador_mail($trabajador_mail) {
        $this->trabajador_mail = $trabajador_mail;
    }

    function setTrabajador_contraseña($trabajador_contraseña) {
        $this->trabajador_contraseña = $trabajador_contraseña;
    }

    function setCuenta_cuenta_id($cuenta_cuenta_id) {
        $this->cuenta_cuenta_id = $cuenta_cuenta_id;
    }

    function __construct($trabajador_nombre, $trabajador_apellido_p, $trabajador_apellido_m, $trabajador_mail, $trabajador_contraseña, $cuenta_cuenta_id) {
        $this->trabajador_nombre = $trabajador_nombre;
        $this->trabajador_apellido_p = $trabajador_apellido_p;
        $this->trabajador_apellido_m = $trabajador_apellido_m;
        $this->trabajador_mail = $trabajador_mail;
        $this->trabajador_contraseña = $trabajador_contraseña;
        $this->cuenta_cuenta_id = $cuenta_cuenta_id;
    }

}
