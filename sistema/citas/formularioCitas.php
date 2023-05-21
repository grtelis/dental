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
                  <label for="exampleInputEmail1" class="form-label">Fecha de cita </label>
                  <input type="date" id="birthday" name="birthday">
                </div>
              </div>



              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Motivo de la cita</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">La cita es para:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Mí
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Conocido
                    </label>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Menor de edad
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Mayor de edad
                    </label>
                  </div>
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