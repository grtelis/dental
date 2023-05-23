<?php
  include('../clases/BD.php');
  include('../clases/Mobiliario.php');

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Mexico_City");
  $obj_Mobiliario = new Mobiliario();
 
  if($_POST['dml'] == 'insert')
  {
   $productoMob = $_POST['productoMob'];
   $precioMob = $_POST['precioMob'];
   $stockMob = $_POST['stockMob'];
   $proveedorMob = $_POST['proveedorMob'];
   $obj_Mobiliario->agregarMobiliario($productoMob, $precioMob, $stockMob, $proveedorMob);

   echo 1;
  }else if ($_POST['dml'] == 'update') {
    $productoMob = $_POST['productoMob'];
    $precioMob = $_POST['precioMob'];
    $stockMob = $_POST['stockMob'];
    $proveedorMob = $_POST['proveedorMob'];
    $obj_Mobiliario->modificarMobiliario($productoMob, $precioMob, $stockMob, $proveedorMob);
    echo 1;
  }elseif($_POST['dml'] == 'delete')
  {
    $mobiliario = $_POST['id'];

    $obj_Mobiliario->eliminarMobiliario($mobiliario);
    echo 1;
  }

?>

