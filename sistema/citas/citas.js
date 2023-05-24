$(document).ready(function () {
  $("#btn-registro-citas").click(function () {
    $("#container").load("../sistema/citas/formularioCitas.php");
    $("html, body").animate({ scrollTop: 0 }, 0);
  });
});

// Validar el formulario
function validarFormularioEvento() {

  if ($("#nombrePa").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("nombrePa").focus();
    alertify.error("Debe ingresar el nombre del paciente");
    return false;
  }


   if ($("#fechacita").val() == "") {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    document.getElementById("fechacita").focus();
    alertify.error("Debe ingresar la fecha de la cita");
    return false;
  }



  if ($("#horaCita").val() == 0) {
    alertify.error("Debe indicar el precio");
    $("html, body").animate({ scrollTop: 200 }, "slow");
    document.getElementById("horaCita").focus();
    return false;
  }


  if ($("#motivoCita").val() == 0) {
    alertify.error("Debe indicar el motivo de la cita");
    $("html, body").animate({ scrollTop: 200 }, "slow");
    document.getElementById("motivoCita").focus();
    return false;
  }
  
  return true;
}


// Registrar articlo
$("#btn-agregar-citas").click(function () {

if (validarFormularioEvento()) {
    var parametros = new FormData($("#form_citas")[0]);
    console.log(parametros);
    $.ajax({
        data: parametros,
        url: "../modulos/Control_Citas.php",
        type: "POST",
        contentType: false,
        processData: false,
        success: function(response)
        {
          console.log(response);
          if (response == 1) {
            alertify.success("El registro de la cita se actualizó correctamente");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/citas/citas.php"
              );
            }, 0);
          } else {
            alertify.error("Hubo un problema al registrar los datos de la cita");
          }
        }
    });
    }
});


// Actualizar evento
function actualizarCita(id) {
  var datos = {
    id: id,
    CRUD: 1,
  };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/citas/formularioCitas.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}

$(document).ready(function () {
  $("#btn-actualizar-citas").click(function () {
    
      var parametros = new FormData($("#form_citas")[0]);
      $.ajax({
        data: parametros,
        url: "../modulos/Control_Citas.php",
        type: "POST",
        contentType: false,
        processData: false,
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            alertify.success("El registro de la cita se actualizó correctamente.");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/citas/citas.php"
              );
            }, 0);
          } else {
            alertify.error("Hubo un problema al actualizar los datos de la cita.");
          }
        },
      });
      return false;
  });
})



// Eliminar evento
function eliminarCita(id,citas) {
  var mensaje = "¿Esta seguro de eliminar el mobiliario ";
  mensaje = mensaje.concat(citas.bold());
  mensaje = mensaje.concat("?");

  var titulo = "Eliminar Cita";
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
        url: "../modulos/Control_Citas.php",
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            alertify.success("Se elimino de manera correcta la cita");
            setTimeout(function () {
              $("html, body").animate({ scrollTop: 0 }, 0);
              $("#container").load(
                "../sistema/citas/citas.php"
              );
            }, 100);
          } else {
            alertify.error("Hubo un problema al eliminar la cita");
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
function consultarCita(id) {
  var datos = {
    id: id,
    CRUD: 0,
   };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/citas/formularioCitas.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}


function consultarCitas(id) {
  var datos = {
    id: id,
    CRUD: 0,
   };

  $.ajax({
    data: datos,
    type: "POST",
    url: "../sistema/citas/citas.php",
    success: function (data) {
      $("html, body").animate({ scrollTop: 0 }, 0);
      $("#container").html(data);
    },
  });
}

// $(document).ready(consultarArticulos(1));