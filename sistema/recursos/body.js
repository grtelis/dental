// Rutas
$(document).ready(function () {
  $("#btn_inicio").click(function () {
    $("#container").load("../sistema/inicio/frm_inicio_reportes.php");
  });

  $("#btn_articulos").click(function () {
    $("#container").load("../sistema/articulos/articulos.php");
  });

  $("#btn_prove").click(function () {
    $("#container").load("../sistema/proveedores/prove.php");
  });

  $("#btn_mobi").click(function () {
    $("#container").load("../sistema/mobiliario/mobiliario.php");
  });

  $("#btn_usuarios").click(function () {
    $("#container").load("../sistema/usuarios/usuarios.php");
  });

  $("#btn_citas").click(function () {
    $("#container").load("../sistema/citas/citas.php");
  });

});
