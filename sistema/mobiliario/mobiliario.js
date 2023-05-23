$(document).ready(function () {
  $("#btn-registro-mobiliario").click(function () {
    $("#container").load("../sistema/mobiliario/formulario_mobiliario.php");
    $("html, body").animate({ scrollTop: 0 }, 0);
  });
});

// Validar el formulario
function validarFormularioEvento() {

  if ($("#proveedorMob").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("proveedorMob").focus();
    alertify.error("Debe ingresar el nombre del proveedor");
    return false;
  }


   if ($("#productoMob").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("productoMob").focus();
    alertify.error("Debe ingresar la descripción");
    return false;
  }



  if ($("#precioMob").val() == 0) {
    alertify.error("Debe indicar el precio");
    $("html, body").animate({ scrollTop: 200 }, "slow");
    document.getElementById("precioMob").focus();
    return false;
  }


  if ($("#stockMob").val() == 0) {
    alertify.error("Debe indicar el stock");
    $("html, body").animate({ scrollTop: 200 }, "slow");
    document.getElementById("stockMob").focus();
    return false;
  }
  
  return true;
}


// Registrar articlo
$("#btn-agregar-mobiliario").click(function () {

if (validarFormularioEvento()) {
    var parametros = new FormData($("#form_mobiliario")[0]);
    $.ajax({
        data: parametros,
        url: "../modulos/Control_Mobiliario.php",
        type: "POST",
        contentType: false,
        processData: false,
        success: function(response)
        {
          console.log(response);
          if (response == 1) {
            alertify.success("El registro del mobiliario se actualizó correctamente");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/mobiliario/mobiliario.php"
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
function actualizarArticulo(id) {
  var datos = {
    id: id,
    CRUD: 1,
  };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/mobiliario/formulario_mobiliario.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}

$(document).ready(function () {
  $("#btn-actualizar-mobiliario").click(function () {
    
      var parametros = new FormData($("#form_mobiliario")[0]);
      $.ajax({
        data: parametros,
        url: "../modulos/Control_Mobiliario.php",
        type: "POST",
        contentType: false,
        processData: false,
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            alertify.success("El registro del articulo se actualizó correctamente.");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/mobiliario/mobiliario.php"
              );
            }, 0);
          } else {
            alertify.error("Hubo un problema al actualizar los datos del articulo.");
          }
        },
      });
      return false;
  });
})



// Eliminar evento
function eliminarArticulo(id,articulo) {
  var mensaje = "¿Esta seguro de eliminar el articulo ";
  mensaje = mensaje.concat(articulo.bold());
  mensaje = mensaje.concat("?");

  var titulo = "Eliminar Articulo";
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
        url: "../modulos/Control_Mobiliario.php",
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            alertify.success("Se elimino de manera correcta el articulo");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/mobiliario/mobiliario.php"
              );
            }, 100);
          } else {
            alertify.error("Hubo un problema al eliminar el articulo");
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
function consultarArticulo(id) {
  var datos = {
    id: id,
    CRUD: 0,
   };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/mobiliario/formulario_mobiliario.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}


function consultarArticulos(id) {
  var datos = {
    id: id,
    CRUD: 0,
   };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/mobiliario/mobiliario.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}

// $(document).ready(consultarArticulos(1));