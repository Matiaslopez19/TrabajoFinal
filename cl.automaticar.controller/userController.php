<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$userName = _POST['username'];
$userPass = _POST['userpass'];
$userDAO = new UserDAO();
$us = $userDAO->login($userName, $userPass);
if (u != NULL) {
    header("http://localhost:81/TrabajoFinal/");
}else{
    
}
?>