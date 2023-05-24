<?php
  include('../clases/BD.php');
  include('../clases/Proveedor.php');

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Mexico_City");
  $obj_Proveedor = new Proveedor();
 
  if($_POST['dml'] == 'insert')
  {
   $proveDescrip = $_POST['proveedor'];
   $precio = $_POST['precio'];
   $nacionalidad = $_POST['nacionalidad'];
   $numeroTelefono = $_POST['numeroTelefono'];
   $correoElectronico = $_POST['correoElectronico'];
   $ubicacion = $_POST['ubicacion'];
   $obj_Proveedor->agregarProveedor($proveDescrip, $precio, $nacionalidad, $numeroTelefono, $correoElectronico, $ubicacion);

   echo 1;

  }else if ($_POST['dml'] == 'update') {
   $proveDescrip = $_POST['proveedor'];
   $precio = $_POST['precio'];
   $nacionalidad = $_POST['nacionalidad'];
   $numeroTelefono = $_POST['numeroTelefono'];
   $correoElectronico = $_POST['correoElectronico'];
   $ubicacion = $_POST['ubicacion'];
   $idProveedor = $_POST['id'];
   $obj_Proveedor->modificarProveedor($idProveedor, $proveDescrip, $precio, $nacionalidad, $numeroTelefono, $correoElectronico, $ubicacion);
    echo 1;
  }elseif($_POST['dml'] == 'delete')
  {
    $proveedor = $_POST['id'];

    $obj_Proveedor->eliminarProveedor($proveedor);
    echo 1;
  }

?>