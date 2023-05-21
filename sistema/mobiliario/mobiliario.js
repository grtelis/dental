$(document).ready(function () {
    $("#agregar-mobiliario").click(function () {
      $("#container").load("../sistema/mobiliario/formulario_mobiliario.php");
      $("html, body").animate({ scrollTop: 0 }, 0);
    });
});