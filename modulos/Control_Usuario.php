<?php
  include('../clases/BD.php');
  include('../clases/Usuario.php');

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Mexico_City");
  $obj_Articulo = new Usuario();
 
  if($_POST['dml'] == 'insert')
  {
   $rol = $_POST['rol'];
   $pers = $_POST['pers'];
   $preg = $_POST['preg'];
   $nombre = $_POST['nombre'];
   $contrasena = $_POST['contrasena'];
   $respuesta = $_POST['respuesta'];
   $estado = True;
   $obj_Usuario->agregarUsuario($rol, $pers, $preg, $nombre, $contrasena, $respuesta, $estado);

   echo 1;
  }else if ($_POST['dml'] == 'update') {
    $rol = $_POST['rol'];
    $preg = $_POST['id'];
    $nombre = $_POST['nombre'];
   $obj_Articulo->actualizarUsuario($rol, $usuario, $nombre);
    echo 1;
  }elseif($_POST['dml'] == 'delete')
  {
    $usuario = $_POST['id'];

    $obj_Usuario->eliminarUsuario($usuario);
    
    echo 1;
  }

?>