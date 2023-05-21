$(document).ready(function () {
    $("#agregar-usuario").click(function () {
      $("#container").load("../sistema/usuarios/formularioUsuarios.php");
      $("html, body").animate({ scrollTop: 0 }, 0);
    });
});