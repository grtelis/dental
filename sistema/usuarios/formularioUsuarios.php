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
              <h3 class="mb-4">Registro de Usuarios</h3>
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Dirección del usuario</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>



              <div class="col-12">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                </div>
              </div>



              <div class="col-12">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Numéro teléfonico</label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="(+52)">
                </div>
              </div>



              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Fecha de registro</label>
                  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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