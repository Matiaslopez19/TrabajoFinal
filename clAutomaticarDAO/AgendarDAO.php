<?php
include '../clAutomaticarData/conexion.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AgendarDAO{
    public function AgregarAgenda($lugar, $fecha, $servicioId, $clienteId) {
        $conexion = Conexion::conn();
        $sql="INSERT INTO agenda(ag_id, ag_estado, ag_lugar, ag_fecha, Servicio_ser_id, "
                . "Cliente_cli_id, Disponibilidad_disp_id) VALUES "
                . "([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
        $sqlComprobacion;
    }
}