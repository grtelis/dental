$(document).ready(function () {
    $("#btn-registro-proveedor").click(function () {
      $("#container").load("../sistema/proveedores/formularioProveedores.php");
      $("html, body").animate({ scrollTop: 0 }, 0);
    });
});

// Validar el formulario
function validarFormularioEvento() {

  if ($("#proveedor").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("proveedor").focus();
    alertify.error("Debe ingresar el nombre del proveedor");
    return false;
  }


  if ($("#precio").val() == 0) {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("precio").focus();
    alertify.error("Debe ingresar el precio");
    return false;
  }

  if (!document.querySelector('input[name="nacionalidad"]:checked')) {
    alertify.error("Debe seleccionar una nacionalidad");
    $("html, body").animate({ scrollTop: 200 }, "slow");
    document.querySelector('input[name="nacionalidad"]').focus();
    return false;
  }

  if ($("#numeroTelefono").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("numeroTelefono").focus();
    alertify.error("Debe ingresar el número telefónico");
    return false;
  }

  if ($("#correoElectronico").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("correoElectronico").focus();
    alertify.error("Debe ingresar un correo electrónico");
    return false;
  }

  if ($("#ubicacion").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("ubicacion").focus();
    alertify.error("Debe ingresar la ubicación");
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

// Actualizar evento
function actualizarProveedor(id) {
  var datos = {
    id: id,
    CRUD: 1,
  };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/proveedores/formularioProveedores.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}

$(document).ready(function () {
  $("#btn-actualizar-proveedor").click(function () {
    
      var parametros = new FormData($("#form_proveedor")[0]);
      $.ajax({
        data: parametros,
        url: "../modulos/Control_Proveedor.php",
        type: "POST",
        contentType: false,
        processData: false,
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            alertify.success("El registro del proveedor se actualizó correctamente.");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/proveedores/prove.php"
              );
            }, 0);
          } else {
            alertify.error("Hubo un problema al actualizar los datos del proveedor.");
          }
        },
      });
      return false;
  });
})


// Eliminar evento
function eliminarProveedor(id,proveedor) {
  var mensaje = "¿Esta seguro de eliminar el proveedor ";
  mensaje = mensaje.concat(proveedor.bold());
  mensaje = mensaje.concat("?");

  var titulo = "Eliminar Proveedor";
  alertify.confirm(
    titulo,
    mensaje,
    function () {
      var dml = "delete";
      var datos = {
        id: id,
        dml: dml,
      };
      $.ajax({
        data: datos,
        type: "POST",
        url: "../modulos/Control_Proveedor.php",
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            alertify.success("Se eliminó de manera correcta el proveedor");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/proveedores/prove.php"
              );
            }, 100);
          } else {
            alertify.error("Hubo un problema al eliminar el proveedor");
          }
        },
      });
    },
    function () {
      alertify.confirm().close();
    }
  );
}

// Consultar evento
function consultarProveedor(id) {
  var datos = {
    id: id,
    CRUD: 0,
   };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/proveedores/formularioProveedores.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}


function consultarProveedores(id) {
  var datos = {
    id: id,
    CRUD: 0,
   };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/proveedores/prove.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}