<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Cuenta{
    private $cuenta_id;
    private $cuenta_tipo;
    
    function getCuenta_id() {
        return $this->cuenta_id;
    }

    function getCuenta_tipo() {
        return $this->cuenta_tipo;
    }

    function setCuenta_id($cuenta_id) {
        $this->cuenta_id = $cuenta_id;
    }

    function setCuenta_tipo($cuenta_tipo) {
        $this->cuenta_tipo = $cuenta_tipo;
    }

    function __construct($cuenta_id, $cuenta_tipo) {
        $this->cuenta_id = $cuenta_id;
        $this->cuenta_tipo = $cuenta_tipo;
    }

}
