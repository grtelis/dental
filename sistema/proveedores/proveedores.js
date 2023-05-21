$(document).ready(function () {
    $("#btn-registro-articulo").click(function () {
      $("#container").load("../sistema/articulos/frm_articulos.php");
      $("html, body").animate({ scrollTop: 0 }, 0);
    });
});