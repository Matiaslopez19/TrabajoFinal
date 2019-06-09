<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User{
    private $cli_id;
    private $cli_nombre;
    private $cli_apellidos;
    private $cli_mail;
    private $cli_clave;
    private $cli_tipo;
    function getCli_id() {
        return $this->cli_id;
    }

    function getCli_nombre() {
        return $this->cli_nombre;
    }

    function getCli_apellidos() {
        return $this->cli_apellidos;
    }

    function getCli_mail() {
        return $this->cli_mail;
    }

    function getCli_clave() {
        return $this->cli_clave;
    }

    function getCli_tipo() {
        return $this->cli_tipo;
    }

    function setCli_id($cli_id) {
        $this->cli_id = $cli_id;
    }

    function setCli_nombre($cli_nombre) {
        $this->cli_nombre = $cli_nombre;
    }

    function setCli_apellidos($cli_apellidos) {
        $this->cli_apellidos = $cli_apellidos;
    }

    function setCli_mail($cli_mail) {
        $this->cli_mail = $cli_mail;
    }

    function setCli_clave($cli_clave) {
        $this->cli_clave = $cli_clave;
    }
    function setCli_tipo($cli_tipo) {
        $this->cli_tipo = $cli_tipo;
    }
    function __construct($cli_id, $cli_nombre, $cli_apellidos, $cli_mail, $cli_clave, $cli_tipo) {
        $this->cli_id = $cli_id;
        $this->cli_nombre = $cli_nombre;
        $this->cli_apellidos = $cli_apellidos;
        $this->cli_mail = $cli_mail;
        $this->cli_clave = $cli_clave;
        $this->cli_tipo = $cli_tipo;
    }
}

