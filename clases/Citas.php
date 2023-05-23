<?php

class Citas
{
    function agregarCitas($nombrePa, $fechaCita, $horaCita, $motivoCita)
    {
        $SQL_Ins_Cita =
            "INSERT INTO citas(nombrepa, fechacita, horacita, motivocita)
         VALUES ('$nombrePa', $fechaCita, $horaCita, '$motivoCita')";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Ins_Cita);
        $bd->cerrarBD();
    }

    function eliminarCita($id_cita)//Aquí puede haber un error
    {
        $SQL_Eli_Cita =
            " DELETE FROM citas
				WHERE id = $id_cita;
			";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Eli_Cita);
        $bd->cerrarBD();
    }

    function buscarTodos($resultados_por_pagina, $desplazamiento)
    {
        $SQL_Bus_Cita =
            "SELECT id_cita, nombrepa, fechacita, horacita, motivocita
              FROM citas LIMIT $desplazamiento OFFSET  $resultados_por_pagina;
		  ";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Bus_Cita);
        $bd->cerrarBD();
        return ($transaccion_1->traerRegistros());
    }

    function modificarCita($nombrePa, $fechaCita, $horaCita, $motivoCita)
    {
        $SQL_Act_Cita =
            "UPDATE citas
          SET 
          nombrepa = '$nombrePa',
          fechacita = $fechaCita,
          horaCita = '$horaCita',
          motivocita = '$motivoCita'
          WHERE id = $citas;
        ";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Act_Cita);
        $bd->cerrarBD();
    }

    function buscarCita($id_cita)//Aquí puede haber un error
    {
        $SQL_Bus_Cita =

          "SELECT id_cita, nombrepa, fechacita, horacita, motivocita
          FROM citas WHERE id = $id_cita;
          ";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Bus_Cita);
        $obj_Cita = $transaccion_1->traerObjeto(0);
        $bd->cerrarBD();
        return ($transaccion_1->traerObjeto(0));
    }

    function totalRegistros()
    {
        $SQL_Bus_Cita =
            "SELECT COUNT(id_cita) AS total FROM citas;";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Bus_Mobiliario);
        $obj_Mobiliario = $transaccion_1->traerObjeto(0);
        $bd->cerrarBD();
        return ($transaccion_1->traerObjeto(0));
    }
}
?>