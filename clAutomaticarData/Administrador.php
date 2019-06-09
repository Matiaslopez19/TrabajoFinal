<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Administrador{
    private $adm_id;
    private $adm_nombre;
    private $adm_usuario;
    private $adm_clave;
  
    function getAdm_id() {
        return $this->adm_id;
    }

    function getAdm_nombre() {
        return $this->adm_nombre;
    }

    function getAdm_usuario() {
        return $this->adm_usuario;
    }

    function getAdm_clave() {
        return $this->adm_clave;
    }

    function setAdm_id($adm_id) {
        $this->adm_id = $adm_id;
    }

    function setAdm_nombre($adm_nombre) {
        $this->adm_nombre = $adm_nombre;
    }

    function setAdm_usuario($adm_usuario) {
        $this->adm_usuario = $adm_usuario;
    }

    function setAdm_clave($adm_clave) {
        $this->adm_clave = $adm_clave;
    }

    function __construct($adm_id, $adm_nombre, $adm_usuario, $adm_clave) {
        $this->adm_id = $adm_id;
        $this->adm_nombre = $adm_nombre;
        $this->adm_usuario = $adm_usuario;
        $this->adm_clave = $adm_clave;
    }
}
