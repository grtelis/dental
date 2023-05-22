<!DOCTYPE html>
<html lang="es">
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
          <form class="mt-4 mb-4">
            <div class="row">
              <h3 class="mb-4">Registro de Proveedores</h3>
              
              <div class="col-12">
                <div class="mb-3">
                  <label for="nombreProveedor" class="form-label">Nombre del proveedor</label>
                  <input type="email" class="form-control" id="nombreProveedor" aria-describedby="emailHelp">
                </div>
              </div>


              <div class="col-12">
                <div class="mb-3">
                    <label for="emailPrveedor" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="emailPrveedor" aria-describedby="emailHelp" placeholder="email">
                </div>
              </div>



              <div class="col-12">
                <div class="mb-3">
                    <label for="numeroProveedor" class="form-label">Numéro teléfonico</label>
                    <input type="tel" class="form-control" id="numeroProveedor" aria-describedby="emailHelp" placeholder="(+52)">
                </div>
              </div>



              <div class="col-12">
                <div class="mb-3">
                  <label for="proveedorMaterial" class="form-label">Material que provee</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona</option>
                    <option value="1">Plastico</option>
                    <option value="2">Metal</option>
                    <option value="3">Resina</option>
                    <option value="4">Madera</option>
                    <option value="5">Cristal</option>
                    <option value="6">Cristal templado</option>
                  </select>
                </div>
              </div>



            <div class="col-12">
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
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