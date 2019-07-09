<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comuna
 *
 * @author sebastian
 */
class Comuna {
    //put your code here
    private $com_id;
    private $com_nombre;
    function getCom_id() {
        return $this->com_id;
    }

    function getCom_nombre() {
        return $this->com_nombre;
    }

    function setCom_id($com_id) {
        $this->com_id = $com_id;
    }

    function setCom_nombre($com_nombre) {
        $this->com_nombre = $com_nombre;
    }

    function __construct($com_id, $com_nombre) {
        $this->com_id = $com_id;
        $this->com_nombre = $com_nombre;
    }

}
