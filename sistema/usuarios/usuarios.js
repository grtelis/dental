$(document).ready(function () {
  $("#btn-agregar-usuario").click(function () {
  $("#container").load("../sistema/usuarios/formularioUsuarios.php");
  $("html, body").animate({ scrollTop: 0 }, 0);
});
});

// Validar el formulario
function validarFormularioUsuario() {

if ($("#rol").val() == "") {
$("html, body").animate({ scrollTop: 0 }, "slow");
document.getElementById("rol").focus();
alertify.error("Debe ingresar el rol del usuario");
return false;
}

if ($("#pers").val() == "") {
$("html, body").animate({ scrollTop: 0 }, "slow");
document.getElementById("pers").focus();
alertify.error("Debe ingresar el id persona del usuario");
return false;
}


if ($("#preg").val() == 0) {
$("html, body").animate({ scrollTop: 0 }, "slow");
document.getElementById("preg").focus();
alertify.error("Debe ingresar el id pregunta del usuario");
return false;
}

if ($("#nombre").val() == "") {
$("html, body").animate({ scrollTop: 0 }, "slow");
document.getElementById("nombre").focus();
alertify.error("Debe ingresar el nombre del usuario");
return false;
}


if ($("#contrasena").val() == "") {
$("html, body").animate({ scrollTop: 0 }, "slow");
document.getElementById("contrasena").focus();
alertify.error("Debe ingresar la contraseña del usuario");
return false;
}



if ($("#respuesta").val() == 0) {
$("html, body").animate({ scrollTop: 0 }, "slow");
document.getElementById("respuesta").focus();
alertify.error("Debe ingresar la respuesta del usuario");
return false;
}

return true;
}

$("#btn-agregar-usuario").click(function () {

if (validarFormularioUsuario()) {
  var parametros = new FormData($("#form_usuario")[0]);
  $.ajax({
      data: parametros,
      url: "../modulos/Control_Usuario.php",
      type: "POST",
      contentType: false,
      processData: false,
      success: function(response)
      {
        console.log(response);
        if (response == 1) {
          alertify.success("El registro del usuario se actualizó correctamente");
          setTimeout(function () {
            $("html, body").animate({ scrollTop: 0 }, 0);
            $("#container").load(
              "../sistema/usuarios/usuarios.php"
            );
          }, 0);
        } else {
          alertify.error("Hubo un problema al registrar los datos del usuario");
        }
      }
  });
  }
});

// Actualizar evento
function actualizarUsuario(id) {
var datos = {
id: id,
CRUD: 1,
};

$.ajax({
data: datos,
type: "POST",
url: "../sistema/usuarios/formularioUsuarios.php",
success: function (data) {
  $("html, body").animate({ scrollTop: 0 }, 0);
  $("#container").html(data);
},
});
}

$(document).ready(function () {
$("#btn-actualizar-usuario").click(function () {

  var parametros = new FormData($("#form_usuario")[0]);
  $.ajax({
    data: parametros,
    url: "../modulos/Control_Usuario.php",
    type: "POST",
    contentType: false,
    processData: false,
    success: function (respuesta) {
      console.log(respuesta);
      if (respuesta == 1) {
        alertify.success("El registro del usuario se actualizó correctamente.");
        setTimeout(function () {
          $("html, body").animate({ scrollTop: 0 }, 0);
          $("#container").load(
            "../sistema/usuarios/usuarios.php"
          );
        }, 0);
      } else {
        alertify.error("Hubo un problema al actualizar los datos del usuario.");
      }
    },
  });
  return false;
});
})



// Eliminar evento
function eliminarUsuario(id,usuario) {
var mensaje = "¿Esta seguro de eliminar el usuario ";
mensaje = mensaje.concat(usuario.bold());
mensaje = mensaje.concat("?");

var titulo = "Eliminar Usuario";
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
    url: "../modulos/Control_Usuario.php",
    success: function (respuesta) {
      console.log(respuesta);
      if (respuesta == 1) {
        alertify.success("Se elimino de manera correcta el usuario");
        setTimeout(function () {
          $("html, body").animate({ scrollTop: 0 }, 0);
          $("#container").load(
            "../sistema/usuarios/usuarios.php"
          );
        }, 100);
      } else {
        alertify.error("Hubo un problema al eliminar el usuario");
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
function consultarUsuario(id) {
var datos = {
id: id,
CRUD: 0,
};

$.ajax({
data: datos,
type: "POST",
url: "../sistema/usuarios/formularioUsuarios.php",
success: function (data) {
  $("html, body").animate({ scrollTop: 0 }, 0);
  $("#container").html(data);
},
});
}

function consultarUsuarios(id) {
var datos = {
id: id,
CRUD: 0,
};

$.ajax({
data: datos,
type: "POST",
url: "../sistema/usuarios/usuarios.php",
success: function (data) {
  $("html, body").animate({ scrollTop: 0 }, 0);
  $("#container").html(data);
},
});
}