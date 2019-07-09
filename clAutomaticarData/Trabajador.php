<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Trabajador{
    private $tra_id;
    private $tra_nombre;
    private $tra_email;
    private $tra_apellidos;
    private $clave;
    private $tra_estado;
    function getTra_id() {
        return $this->tra_id;
    }

    function getTra_nombre() {
        return $this->tra_nombre;
    }

    function getTra_email() {
        return $this->tra_email;
    }

    function getTra_apellidos() {
        return $this->tra_apellidos;
    }

    function getClave() {
        return $this->clave;
    }

    function getTra_estado() {
        return $this->tra_estado;
    }

    function setTra_id($tra_id) {
        $this->tra_id = $tra_id;
    }

    function setTra_nombre($tra_nombre) {
        $this->tra_nombre = $tra_nombre;
    }

    function setTra_email($tra_email) {
        $this->tra_email = $tra_email;
    }

    function setTra_apellidos($tra_apellidos) {
        $this->tra_apellidos = $tra_apellidos;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setTra_estado($tra_estado) {
        $this->tra_estado = $tra_estado;
    }

    function __construct($tra_id, $tra_nombre, $tra_email, $tra_apellidos, $clave, $tra_estado) {
        $this->tra_id = $tra_id;
        $this->tra_nombre = $tra_nombre;
        $this->tra_email = $tra_email;
        $this->tra_apellidos = $tra_apellidos;
        $this->clave = $clave;
        $this->tra_estado = $tra_estado;
    }

}
