<?php
include '../clAutomaticarData/conexion.php';
include_once '../assets/fullcalendar/demos/php/utils.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AgendarDAO{
    public function AgregarAgenda($lugar, $fecha_inicio, $servicioId, $clienteId, $disponibilidadId, $fecha_termino, $estado, $patente, $ubicacion) {
        $conexion = Conexion::conn();
        $n;
        $sql="INSERT INTO `agenda`(`ag_estado`, `ag_patente`, `ag_lugar`, "
                . "`ag_ubicacion`, `ag_fecha_inicio`, `Servicio_ser_id`, `Cliente_cli_id`,"
                . " `Disponibilidad_disp_id`, `ag_fecha_termino`) VALUES ('".$estado."',"
                . "'".$patente."','".$lugar."','".$ubicacion."','".$fecha_inicio."',".$servicioId.","
                . "".$clienteId.",".$disponibilidadId.",'".$fecha_termino."')";
        $sqlComprobacion="SELECT * FROM agenda WHERE Cliente_cli_id=".$clienteId."AND ag_fecha_inicio=".$fecha_inicio.""
                . "AND ag_fecha_Termino=".$fecha_termino.";";
        $res= mysqli_query($conexion, $sqlComprobacion);
        $resultadoc = mysqli_fetch_object($res);
        if(is_null($resultadoc)){
           $res2= mysqli_query($conexion, $sql);
           if (!is_null($res2)) {
               $u=TRUE;
               echo 'ingresado sin problemas';
           }else{
               $u=FALSE;
               echo 'error en los datos ingresado';
           }
        }else{
         $u=false;
         echo 'esta hora ya ha sido reservada por el usuario';
        }
        return $u;
    }
    public static function FindAllEvents($user){
        $query = "select ag_id as id,ag_fecha_inicio as start, ser_nombre as title,"
                . " ag_fecha_termino as end, if(Cliente_cli_id = '".$user['cli_id']."', 'blue','red')  AS color,"
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