<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Disponibilidad {
    private $disp_id;
    private $disp_dia;
    private $disp_Hinicio;
    private $disp_Htermino;
    private $disp_estado;
    
    function getDisp_id() {
        return $this->disp_id;
    }

    function getDisp_dia() {
        return $this->disp_dia;
    }

    function getDisp_Hinicio() {
        return $this->disp_Hinicio;
    }

    function getDisp_Htermino() {
        return $this->disp_Htermino;
    }

    function getDisp_estado() {
        return $this->disp_estado;
    }

    function setDisp_id($disp_id) {
        $this->disp_id = $disp_id;
    }

    function setDisp_dia($disp_dia) {
        $this->disp_dia = $disp_dia;
    }

    function setDisp_Hinicio($disp_Hinicio) {
        $this->disp_Hinicio = $disp_Hinicio;
    }

    function setDisp_Htermino($disp_Htermino) {
        $this->disp_Htermino = $disp_Htermino;
    }

    function setDisp_estado($disp_estado) {
        $this->disp_estado = $disp_estado;
    }

    function __construct($disp_id, $disp_dia, $disp_Hinicio, $disp_Htermino, $disp_estado) {
        $this->disp_id = $disp_id;
        $this->disp_dia = $disp_dia;
        $this->disp_Hinicio = $disp_Hinicio;
        $this->disp_Htermino = $disp_Htermino;
        $this->disp_estado = $disp_estado;
    }

}
