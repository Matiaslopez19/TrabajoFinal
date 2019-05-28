<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User{
    private $userId;
    private $userName;
    private $userApellidoP;
    private $userApellidoM;
    private $userMail;
    private $userPass;
    private $cuentaId;
    function getUserId() {
        return $this->userId;
    }

    function getUserName() {
        return $this->userName;
    }

    function getUserApellidoP() {
        return $this->userApellidoP;
    }

    function getUserApellidoM() {
        return $this->userApellidoM;
    }

    function getUserMail() {
        return $this->userMail;
    }

    function getUserPass() {
        return $this->userPass;
    }

    function getCuentaId() {
        return $this->cuentaId;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setUserApellidoP($userApellidoP) {
        $this->userApellidoP = $userApellidoP;
    }

    function setUserApellidoM($userApellidoM) {
        $this->userApellidoM = $userApellidoM;
    }

    function setUserMail($userMail) {
        $this->userMail = $userMail;
    }

    function setUserPass($userPass) {
        $this->userPass = $userPass;
    }

    function setCuentaId($cuentaId) {
        $this->cuentaId = $cuentaId;
    }

    function __construct($userId, $userName, $userApellidoP, $userApellidoM, $userMail, $userPass, $cuentaId) {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userApellidoP = $userApellidoP;
        $this->userApellidoM = $userApellidoM;
        $this->userMail = $userMail;
        $this->userPass = $userPass;
        $this->cuentaId = $cuentaId;
    }
    /*
     function __construct($userName, $userApellidoP, $userApellidoM, $userMail, $userPass, $cuentaId) {
        $this->userName = $userName;
        $this->userApellidoP = $userApellidoP;
        $this->userApellidoM = $userApellidoM;
        $this->userMail = $userMail;
        $this->userPass = $userPass;
        $this->cuentaId = $cuentaId;
    }
    */
}
