<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../clAutomaticarDAO/AgendarDAO.php';

$event = AgendarDAO::EventosActuales($_SESSION['user']);
print_r($event); exit;
echo json_encode($event);

