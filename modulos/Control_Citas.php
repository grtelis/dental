<?php
  include('../clases/BD.php');
  include('../clases/Citas.php');

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Mexico_City");
  $obj_Cita = new Citas();
 
  if($_POST['dml'] == 'insert')
  {
   $nombrePa = $_POST['nombrePa'];
   $fechaCita = $_POST['fechaCita'];
   $horaCita = $_POST['horaCita'];
   $motivoCita = $_POST['motivoCita'];
   $obj_Cita->agregarCitas($nombrePa, $fechaCita, $horaCita, $motivoCita);

   echo 1;
  }else if ($_POST['dml'] == 'update') {
    $nombrePa = $_POST['nombrePa'];
    $fechaCita = $_POST['fechaCita'];
    $horaCita = $_POST['horaCita'];
    $motivoCita = $_POST['motivoCita'];
    $citas = $_POST['id_cita'];//Aquí puede haber un error
    $obj_Cita->modificarCita($nombrePa, $fechaCita, $horaCita, $motivoCita);
    echo 1;
  }elseif($_POST['dml'] == 'delete')
  {
    $citas = $_POST['id_cita'];//Aquí puede haber un error

    $obj_Mobiliario->eliminarCita($id_cita);//Aquí puede haber un error
    echo 1;
  }

?>

