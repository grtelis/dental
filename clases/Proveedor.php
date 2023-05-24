<?php
  class Proveedor
  {
    function agregarProveedor($proveedor, $precio, $nacionalidad, $numero_telefono, $correo_electronico, $ubicacion)
    {
        $SQL_Ins_Proveedor = 
        "INSERT INTO proveedor(prove_descrip, precio, nacionalidad, numero_telefono, correo_electronico, ubicacion)
         VALUES ('$proveedor',$precio,'$nacionalidad','$numero_telefono','$correo_electronico','$ubicacion')";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Ins_Proveedor);
        $bd->cerrarBD();

    }

    function eliminarProveedor($proveedor)
    {
      $SQL_Eliminar_Proveedor = 
			" DELETE FROM proveedor
				WHERE prove_id_prove = $proveedor;
			";

      $bd = new BD();
      $bd->abrirBD();
      $transaccion_1 = new Transaccion($bd->conexion);
      $transaccion_1->enviarQuery($SQL_Eliminar_Proveedor);
      $bd->cerrarBD();
    }


    function buscarTodos($resultados_por_pagina, $desplazamiento){
      $SQL_Buscar_Proveedor = 
      "SELECT * FROM proveedor LIMIT $desplazamiento OFFSET $resultados_por_pagina;";

		  $bd = new BD();
		  $bd->abrirBD();
		  $transaccion_1 = new Transaccion($bd->conexion);
		  $transaccion_1->enviarQuery($SQL_Buscar_Proveedor);
		  $bd->cerrarBD();
		  return ($transaccion_1->traerRegistros());
    }

    function modificarProveedor($idProve, $proveedor, $precio, $nacionalidad, $numero_telefono, $correo_electronico, $ubicacion)
    {
        $SQL_Modificar_Proveedor = 
        "UPDATE proveedor
          SET prove_descrip = '$proveedor', 
          precio = $precio, 
          nacionalidad = '$nacionalidad', 
          numero_telefono = '$numero_telefono', 
          correo_electronico = '$correo_electronico', 
          ubicacion = '$ubicacion'
          WHERE prove_id_prove = $idProve;
        ";

        $bd = new BD();
        $bd->abrirBD();
        $transaccion_1 = new Transaccion($bd->conexion);
        $transaccion_1->enviarQuery($SQL_Modificar_Proveedor);
        $bd->cerrarBD();
    }

    function totalRegistros(){

      $SQL_Bus_Proveedores = 
      "SELECT COUNT(prove_id_prove) AS total FROM proveedor;";
  
      $bd = new BD();
      $bd->abrirBD();
      $transaccion_1 = new Transaccion($bd->conexion);
      $transaccion_1->enviarQuery($SQL_Bus_Proveedores);
      $obj_Curso = $transaccion_1->traerObjeto(0);
      $bd->cerrarBD();
      return ($transaccion_1->traerObjeto(0));
    }

    function buscarProveedor($idProveedor){

      $SQL_Buscar_Proveedor = 
      "SELECT prove_id_prove,prove_descrip, 
      precio,nacionalidad, 
      numero_telefono, 
      correo_electronico, 
      ubicacion
          FROM proveedor where prove_id_prove = $idProveedor;
      ";
  
      $bd = new BD();
      $bd->abrirBD();
      $transaccion_1 = new Transaccion($bd->conexion);
      $transaccion_1->enviarQuery($SQL_Buscar_Proveedor);
      $obj_Curso = $transaccion_1->traerObjeto(0);
      $bd->cerrarBD();
      return ($transaccion_1->traerObjeto(0));
    }

  }
?>