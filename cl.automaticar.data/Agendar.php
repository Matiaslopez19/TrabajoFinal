<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Agendar{
    private $agendar_id;
    private $agendar_hora;
    private $agendar_fecha;
    private $agendar_tipo_servicio;
    private $agendar_patente;
    private $agendar_comuna;
    private $agendar_direccion;
    private $agendar_ruta_foto;
    private $servicios_servicios_id;
    private $usuario_usuario_id;
    
    function getAgendar_id() {
        return $this->agendar_id;
    }

    function getAgendar_hora() {
        return $this->agendar_hora;
    }

    function getAgendar_fecha() {
        return $this->agendar_fecha;
    }

    function getAgendar_tipo_servicio() {
        return $this->agendar_tipo_servicio;
    }

    function getAgendar_patente() {
        return $this->agendar_patente;
    }

    function getAgendar_comuna() {
        return $this->agendar_comuna;
    }

    function getAgendar_direccion() {
        return $this->agendar_direccion;
    }

    function getAgendar_ruta_foto() {
        return $this->agendar_ruta_foto;
    }

    function getServicios_servicios_id() {
        return $this->servicios_servicios_id;
    }

    function getUsuario_usuario_id() {
        return $this->usuario_usuario_id;
    }

    function setAgendar_id($agendar_id) {
        $this->agendar_id = $agendar_id;
    }

    function setAgendar_hora($agendar_hora) {
        $this->agendar_hora = $agendar_hora;
    }

    function setAgendar_fecha($agendar_fecha) {
        $this->agendar_fecha = $agendar_fecha;
    }

    function setAgendar_tipo_servicio($agendar_tipo_servicio) {
        $this->agendar_tipo_servicio = $agendar_tipo_servicio;
    }

    function setAgendar_patente($agendar_patente) {
        $this->agendar_patente = $agendar_patente;
    }

    function setAgendar_comuna($agendar_comuna) {
        $this->agendar_comuna = $agendar_comuna;
    }

    function setAgendar_direccion($agendar_direccion) {
        $this->agendar_direccion = $agendar_direccion;
    }

    function setAgendar_ruta_foto($agendar_ruta_foto) {
        $this->agendar_ruta_foto = $agendar_ruta_foto;
    }

    function setServicios_servicios_id($servicios_servicios_id) {
        $this->servicios_servicios_id = $servicios_servicios_id;
    }

    function setUsuario_usuario_id($usuario_usuario_id) {
        $this->usuario_usuario_id = $usuario_usuario_id;
    }

    function __construct($agendar_hora, $agendar_fecha, $agendar_tipo_servicio, $agendar_patente, $agendar_comuna, $agendar_direccion, $agendar_ruta_foto, $servicios_servicios_id, $usuario_usuario_id) {
        $this->agendar_hora = $agendar_hora;
        $this->agendar_fecha = $agendar_fecha;
        $this->agendar_tipo_servicio = $agendar_tipo_servicio;
        $this->agendar_patente = $agendar_patente;
        $this->agendar_comuna = $agendar_comuna;
        $this->agendar_direccion = $agendar_direccion;
        $this->agendar_ruta_foto = $agendar_ruta_foto;
        $this->servicios_servicios_id = $servicios_servicios_id;
        $this->usuario_usuario_id = $usuario_usuario_id;
    }

}