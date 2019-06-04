<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Historial{
    private $historial_patente_id;
    private $historial_ruta_pdf;
    private $usuario_usuario_id;
    
    function getHistorial_patente_id() {
        return $this->historial_patente_id;
    }

    function getHistorial_ruta_pdf() {
        return $this->historial_ruta_pdf;
    }

    function getUsuario_usuario_id() {
        return $this->usuario_usuario_id;
    }

    function setHistorial_patente_id($historial_patente_id) {
        $this->historial_patente_id = $historial_patente_id;
    }

    function setHistorial_ruta_pdf($historial_ruta_pdf) {
        $this->historial_ruta_pdf = $historial_ruta_pdf;
    }

    function setUsuario_usuario_id($usuario_usuario_id) {
        $this->usuario_usuario_id = $usuario_usuario_id;
    }

    function __construct($historial_patente_id, $historial_ruta_pdf, $usuario_usuario_id) {
        $this->historial_patente_id = $historial_patente_id;
        $this->historial_ruta_pdf = $historial_ruta_pdf;
        $this->usuario_usuario_id = $usuario_usuario_id;
    }

}
