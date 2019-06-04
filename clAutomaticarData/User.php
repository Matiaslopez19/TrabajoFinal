<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User{
    private $USUARIO_id;
    private $USUARIO_nombre;
    private $USUARIO_apellido_p;
    private $USUARIO_apellido_m;
    private $USUARIO_mail;
    private $USUARIO_clave;
    private $CUENTA_CUENTA_id;
    public function  foo(){
        return $this->USUARIO_nombre." --- Hola";
    }
            function getUSUARIO_id() {
        return $this->USUARIO_id;
    }
    function getUSUARIO_nombre() {
        return $this->USUARIO_nombre;
    }
    function getUSUARIO_apellido_p() {
        return $this->USUARIO_apellido_p;
    }
    function getUSUARIO_apellido_m() {
        return $this->USUARIO_apellido_m;
    }
    function getUSUARIO_mail() {
        return $this->USUARIO_mail;
    }
    function getUSUARIO_clave() {
        return $this->USUARIO_clave;
    }
    function getCUENTA_CUENTA_id() {
        return $this->CUENTA_CUENTA_id;
    }
    function setUSUARIO_id($USUARIO_id) {
        $this->USUARIO_id = $USUARIO_id;
    }
    function setUSUARIO_nombre($USUARIO_nombre) {
        $this->USUARIO_nombre = $USUARIO_nombre;
    }
    function setUSUARIO_apellido_p($USUARIO_apellido_p) {
        $this->USUARIO_apellido_p = $USUARIO_apellido_p;
    }
    function setUSUARIO_apellido_m($USUARIO_apellido_m) {
        $this->USUARIO_apellido_m = $USUARIO_apellido_m;
    }
    function setUSUARIO_mail($USUARIO_mail) {
        $this->USUARIO_mail = $USUARIO_mail;
    }
    function setUSUARIO_clave($USUARIO_clave) {
        $this->USUARIO_clave = $USUARIO_clave;
    }
    function setCUENTA_CUENTA_id($CUENTA_CUENTA_id) {
        $this->CUENTA_CUENTA_id = $CUENTA_CUENTA_id;
    }
    function __construct($USUARIO_nombre, $USUARIO_apellido_p, $USUARIO_apellido_m, $USUARIO_mail, $USUARIO_clave, $CUENTA_CUENTA_id) {
        $this->USUARIO_nombre = $USUARIO_nombre;
        $this->USUARIO_apellido_p = $USUARIO_apellido_p;
        $this->USUARIO_apellido_m = $USUARIO_apellido_m;
        $this->USUARIO_mail = $USUARIO_mail;
        $this->USUARIO_clave = $USUARIO_clave;
        $this->CUENTA_CUENTA_id = $CUENTA_CUENTA_id;
    }
    
}

