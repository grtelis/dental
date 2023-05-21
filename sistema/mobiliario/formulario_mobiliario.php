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
          <form class="mt-4 mb-4">
            <div class="row">
              <h3 class="mb-4">Registro de Mobiliario</h3>
              <div class="col-12">
                <div class="mb-3">
                  <label for="nombreMob" class="form-label">Nombre de proveedor</label>
                  <input type="text" class="form-control" id="nombreMob" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label for="costoMob" class="form-label">Producto</label>
                  <input type="number" class="form-control" id="costoMob" aria-describedby="emailHelp" placeholder="">
                </div>
              </div>

              <div class="col-3">
                <div class="mb-3">
                    <label for="categoriaMob" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="categoriaMob" aria-describedby="emailHelp" placeholder="">
                </div>
              </div>

              <div class="col-3">
                <div class="mb-3">
                  <label for="cantidadMob" class="form-label">En stock</label>
                  <input type="number" class="form-control" id="cantidadMob" placeholder="">
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