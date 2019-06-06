<?php
class Servicio{
    private $se_id;
    private $se_nombre;
    private $se_tipo;
    private $se_estado;
    
    function getSe_id() {
        return $this->se_id;
    }

    function getSe_nombre() {
        return $this->se_nombre;
    }

    function getSe_tipo() {
        return $this->se_tipo;
    }

    function getSe_estado() {
        return $this->se_estado;
    }

    function setSe_id($se_id) {
        $this->se_id = $se_id;
    }

    function setSe_nombre($se_nombre) {
        $this->se_nombre = $se_nombre;
    }

    function setSe_tipo($se_tipo) {
        $this->se_tipo = $se_tipo;
    }

    function setSe_estado($se_estado) {
        $this->se_estado = $se_estado;
    }

    function __construct($se_id, $se_nombre, $se_tipo, $se_estado) {
        $this->se_id = $se_id;
        $this->se_nombre = $se_nombre;
        $this->se_tipo = $se_tipo;
        $this->se_estado = $se_estado;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

