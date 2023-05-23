<?php

class Mobiliario
{
    function agregarMobiliario($proveedorMob, $productoMob, $precioMob, $stockMob)
    {
        $SQL_Ins_Mobiliario =
            "INSERT INTO Mobiliario(proveedormob, productomob, preciomob, stockmob)
         VALUES ('$proveedorMob', $productoMob, $precioMob, $stockMob)";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Ins_Mobiliario);
        $bd->cerrarBD();
    }

    function eliminarMobiliario($mobiliario)
    {
        $SQL_Eli_Mobiliario =
            " DELETE FROM Mobiliario
				WHERE id = $id;
			";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Eli_Mobiliario);
        $bd->cerrarBD();
    }

    function buscarTodos($resultados_por_pagina, $desplazamiento)
    {
        $SQL_Bus_Mobiliario =
            "SELECT id, proveedormob, productomob, preciomob, stockmob
              FROM mobiliario LIMIT $desplazamiento OFFSET  $resultados_por_pagina;
		  ";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Bus_Mobiliario);
        $bd->cerrarBD();
        return ($transaccion_1->traerRegistros());
    }

    function modificarMobiliario($proveedorMob, $productoMob, $precioMob, $stockMob)
    {
        $SQL_Act_Mobiliario =
            "UPDATE Mobiliario
          SET proveedormob = '$proveedorMob',
          productomob = $productoMob,
          preciomob = $precioMob,
          stockmob = $stockMob
          WHERE id = $id;
        ";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Act_Mobiliario);
        $bd->cerrarBD();
    }

    function buscarMobiliario($id)
    {
        $SQL_Bus_Mobiliario =
            "SELECT id, proveedormob, productomob, preciomob, stockmob
          FROM Mobiliario WHERE id = $id;
      ";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Bus_Mobiliario);
        $obj_Mobiliario = $transaccion_1->traerObjeto(0);
        $bd->cerrarBD();
        return ($transaccion_1->traerObjeto(0));
    }

    function totalRegistros()
    {
        $SQL_Bus_Mobiliario =
            "SELECT COUNT(id) AS total FROM Mobiliario;";

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