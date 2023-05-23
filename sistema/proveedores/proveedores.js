$(document).ready(function () {
    $("#btn-registro-proveedor").click(function () {
      $("#container").load("../sistema/proveedores/formularioProveedores.php");
      $("html, body").animate({ scrollTop: 0 }, 0);
    });
});

// Validar el formulario
function validarFormularioEvento() {

  if ($("#nombProd").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("nombProd").focus();
    alertify.error("Debe ingresar el nombre del articulo");
    return false;
  }


   if ($("#descripcion").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("descripcion").focus();
    alertify.error("Debe ingresar la descripción");
    return false;
  }



  if ($("#tipoMaterial").val() == 0) {
    alertify.error("Debe seleccionar un tipo de material");
    $("html, body").animate({ scrollTop: 200 }, "slow");
    document.getElementById("tipoMaterial").focus();
    return false;
  }


  if ($("#proveedor").val() == 0) {
    alertify.error("Debe seleccionar un proveedor");
    $("html, body").animate({ scrollTop: 200 }, "slow");
    document.getElementById("proveedor").focus();
    return false;
  }


  if ($("#fecha").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("fecha").focus();
    alertify.error("Debe ingresar la fecha");
    return false;
  }
  
  return true;
}

// Registrar proveedor
$("#btn-agregar-proveedor").click(function () {

  if (validarFormularioEvento()) {
      var parametros = new FormData($("#form_proveedor")[0]);
      $.ajax({
          data: parametros,
          url: "../modulos/Control_Proveedor.php",
          type: "POST",
          contentType: false,
          processData: false,
          success: function(response)
          {
            console.log(response);
            if (response == 1) {
              alertify.success("El registro del proveedor se actualizó correctamente");
              setTimeout(function () {
                $("html, body").animate({ scrollTop: 0 }, 0);
                $("#container").load(
                  "../sistema/proveedores/prove.php"
                );
              }, 0);
            } else {
              alertify.error("Hubo un problema al registrar los datos del evento");
            }
          }
      });
      }
  });