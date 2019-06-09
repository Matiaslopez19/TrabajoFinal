<?php
class Servicio{
    private $ser_id;
    private $ser_nombre;
    private $ser_tipo;
    private $ser_estado;
    
    function getSer_id() {
        return $this->ser_id;
    }

    function getSer_nombre() {
        return $this->ser_nombre;
    }

    function getSer_tipo() {
        return $this->ser_tipo;
    }

    function getSer_estado() {
        return $this->ser_estado;
    }

    function setSer_id($ser_id) {
        $this->ser_id = $ser_id;
    }

    function setSer_nombre($ser_nombre) {
        $this->ser_nombre = $ser_nombre;
    }

    function setSer_tipo($ser_tipo) {
        $this->ser_tipo = $ser_tipo;
    }

    function setSer_estado($ser_estado) {
        $this->ser_estado = $ser_estado;
    }

    function __construct($ser_id, $ser_nombre, $ser_tipo, $ser_estado) {
        $this->ser_id = $ser_id;
        $this->ser_nombre = $ser_nombre;
        $this->ser_tipo = $ser_tipo;
        $this->ser_estado = $ser_estado;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

