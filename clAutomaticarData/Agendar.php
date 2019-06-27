<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Agendar{
    private $agendar_id;
    private $agendar_estado;
    private $agendar_fecha_inicio;
    private $agendar_lugar;
    private $agendar_patente;
    private $agendar_direccion;
    private $servicios_servicios_id;
    private $usuario_usuario_id;
    private $agendar_fecha_termino;
    private $agendar_disponibilidad;
    
    function getAgendar_id() {
        return $this->agendar_id;
    }

    function getAgendar_estado() {
        return $this->agendar_estado;
    }

    function getAgendar_fecha_inicio() {
        return $this->agendar_fecha_inicio;
    }

    function getAgendar_lugar() {
        return $this->agendar_lugar;
    }

    function getAgendar_patente() {
        return $this->agendar_patente;
    }

    function getAgendar_direccion() {
        return $this->agendar_direccion;
    }

    function getServicios_servicios_id() {
        return $this->servicios_servicios_id;
    }

    function getUsuario_usuario_id() {
        return $this->usuario_usuario_id;
    }

    function getAgendar_fecha_termino() {
        return $this->agendar_fecha_termino;
    }

    function getAgendar_disponibilidad() {
        return $this->agendar_disponibilidad;
    }

    function setAgendar_id($agendar_id) {
        $this->agendar_id = $agendar_id;
    }

    function setAgendar_estado($agendar_estado) {
        $this->agendar_estado = $agendar_estado;
    }

    function setAgendar_fecha_inicio($agendar_fecha_inicio) {
        $this->agendar_fecha_inicio = $agendar_fecha_inicio;
    }

    function setAgendar_lugar($agendar_lugar) {
        $this->agendar_lugar = $agendar_lugar;
    }

    function setAgendar_patente($agendar_patente) {
        $this->agendar_patente = $agendar_patente;
    }

    function setAgendar_direccion($agendar_direccion) {
        $this->agendar_direccion = $agendar_direccion;
    }

    function setServicios_servicios_id($servicios_servicios_id) {
        $this->servicios_servicios_id = $servicios_servicios_id;
    }

    function setUsuario_usuario_id($usuario_usuario_id) {
        $this->usuario_usuario_id = $usuario_usuario_id;
    }

    function setAgendar_fecha_termino($agendar_fecha_termino) {
        $this->agendar_fecha_termino = $agendar_fecha_termino;
    }

    function setAgendar_disponibilidad($agendar_disponibilidad) {
        $this->agendar_disponibilidad = $agendar_disponibilidad;
    }

    function __construct($agendar_id, $agendar_estado, $agendar_fecha_inicio, $agendar_lugar, $agendar_patente, $agendar_direccion, $servicios_servicios_id, $usuario_usuario_id, $agendar_fecha_termino, $agendar_disponibilidad) {
        $this->agendar_id = $agendar_id;
        $this->agendar_estado = $agendar_estado;
        $this->agendar_fecha_inicio = $agendar_fecha_inicio;
        $this->agendar_lugar = $agendar_lugar;
        $this->agendar_patente = $agendar_patente;
        $this->agendar_direccion = $agendar_direccion;
        $this->servicios_servicios_id = $servicios_servicios_id;
        $this->usuario_usuario_id = $usuario_usuario_id;
        $this->agendar_fecha_termino = $agendar_fecha_termino;
        $this->agendar_disponibilidad = $agendar_disponibilidad;
    }

    
}