<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulariocitas</title>
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
            <form action="/action_page.php">
              <h3 class="mb-4">Registro de Citas</h3>
              
              <div class="col-12">
                <div class="mb-3">
                  <label for="fechaCita" class="form-label">Fecha de cita </label>
                  <input type="date" id="fechaCita" name="fecha">
                </div>
              </div>


              <div class="mb-3">
                <label for="motivoCita" class="form-label">Motivo de la cita</label>
                <textarea class="form-control" id="motivoCita" rows="3"></textarea>
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