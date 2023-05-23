<?php
  include('../clases/BD.php');
  include('../clases/Mobiliario.php');

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Mexico_City");
  $obj_mobiliario = new Mobiliario();
 
  if($_POST['dml'] == 'insert')
  {
   $productoMob = $_POST['productoMob'];
   $precioMob = $_POST['precioMob'];
   $stockMob = $_POST['stockMob'];
   $proveedorMob = $_POST['proveedorMob'];
   $obj_mobiliario->agregarMobiliario($productoMob, $precioMob, $stockMob, $proveedorMob);

   echo 1;
  }else if ($_POST['dml'] == 'update') {
    $productoMob = $_POST['productoMob'];
    $precioMob = $_POST['precioMob'];
    $stockMob = $_POST['stockMob'];
    $proveedorMob = $_POST['proveedorMob'];
    $mobiliario = $_POST['id'];
    $obj_mobiliario->modificarMobiliario($mobiliario, $productoMob, $precioMob, $stockMob, $proveedorMob);
    echo 1;
  }elseif($_POST['dml'] == 'delete')
  {
    $mobiliario = $_POST['id'];

    $obj_mobiliario->eliminarMobiliario($mobiliario);
    echo 1;
  }

?>

