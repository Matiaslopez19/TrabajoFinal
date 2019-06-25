<?php
include '../clAutomaticarData/conexion.php';
include_once '../assets/fullcalendar/demos/php/utils.php';
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
    public static function FindAllEvents($user){
        $query = "select ag_id as id,ag_fecha as start, ser_nombre as title,"
                . " ag_fechatermino as end, if(Cliente_cli_id = '".$user['cli_id']."', 'blue','red')  AS color,"
                . " if(Cliente_cli_id = '".$user['cli_id']."', true,false)  AS editable from agenda "
                . " inner join servicio on ser_id = Servicio_ser_id "
                . " where ag_estado = 1";
       
        $conexion = Conexion::conn();
        
        $res = mysqli_query($conexion,$query);
        while($row = mysqli_fetch_assoc($res)){
            
             // Convert the input array into a useful Event object
            $event = new Event($row);
            
            // If the event is in-bounds, add it to the output
            //if ($event->isWithinDayRange($range_start, $range_end)) {
              $output_arrays[] = $event->toArray();
            //}
        }
        return $output_arrays;
    }
}