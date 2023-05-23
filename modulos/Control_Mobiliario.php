<?php
  include('../clases/BD.php');
  include('../clases/Mobiliario.php');

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Mexico_City");
  $obj_Mobiliario = new Mobiliario();
 
  if($_POST['dml'] == 'insert')
  {
   $proveedorMob = $_POST['proveedormob'];
   $productoMob = $_POST['productomob'];
   $precioMob = $_POST['preciomob'];
   $stockMob = $_POST['stockmob'];
   $obj_Mobiliario->agregarMobiliario($proveedorMob, $productoMob, $precioMob, $stockMob);

   echo 1;
  }else if ($_POST['dml'] == 'update') {
    $proveedorMob = $_POST['proveedormob'];
    $productoMob = $_POST['productomob'];
    $precioMob = $_POST['preciomob'];
    $stockMob = $_POST['stockmob'];
    $obj_Mobiliario->modificarMobiliario($proveedorMob, $productoMob, $precioMob, $stockMob)
    echo 1;
  }elseif($_POST['dml'] == 'delete')
  {
    $mobiliario = $_POST['id'];

    $obj_Mobiliario->eliminarMobiliario($mobiliario)
    echo 1;
  }

?>

