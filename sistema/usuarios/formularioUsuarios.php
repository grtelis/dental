<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login de dentista con Bootstrap 5</title>
  <!-- Enlace a los estilos de Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <main class="main-container">

      <section id="formulario" class="formA mt-5 mb-5">
        <div class="container">
          <form class="mt-4 mb-4" id="form_usuario">
            <div class="row">
              <h3 class="mb-4">Registro de Usuarios</h3>
              
              <div class="col-12">
                <div class="mb-3">Rol</label>
                  <input type="number" class="form-control" id="rol">
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label for="pers" class="form-label">Persona</label>
                  <input type="number" class="form-control" id="pers">
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label for="preg" class="form-label">Pregunta</label>
                  <input type="number" class="form-control" id="preg">
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre del usuario</label>
                  <input type="text" class="form-control" id="nombre">
                </div>
              </div>


              <div class="col-12">
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="contrasena">
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label for="respuesta" class="form-label">Respuesta</label>
                  <input type="text" class="form-control" id="respuesta">
                </div>
              </div>

            <div class="col-12">
              <div class="mb-3">
                <?php if (isset($_POST['CRUD'])) { ?>
                <?php if ($_POST['CRUD'] == 1) { ?>
                  <button id="btn-actualizar-usuario" type="button" class="btn btn-success btn-footer">Actualizar</button> 
                  <input type="hidden" name="dml" value="update"/>
                  <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>              
                <?php } ?>
                <?php }else{ ?>
                  <button type="button" class="btn btn-primary" id="btn-agregar-usuario">Enviar</button>
                  <input type="hidden" name="dml" value="insert"/>
                  <?php } ?>
              </div>
            </div>

            
            </div>
          </form>
        </div>
      </section>
  </main>
  <!-- Scripts de Bootstrap 5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>