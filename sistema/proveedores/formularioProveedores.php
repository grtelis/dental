<?php
  include('../../clases/BD.php');
  include('../../clases/Proveedor.php');

  if (isset($_POST['id'])) {
    $obj_Proveedor = new Proveedor();
    $proveedor = $obj_Proveedor->buscarProveedor($_POST['id']);
  }

?>

  <section id="formulario" class="formA mt-5 mb-5">
    <div class="container">
      <form class="mt-4 mb-4">
        <div class="row">
          <h3 class="mb-4">Registro de Proveedores</h3>
          <div class="col-12">
            <div class="mb-3">
              <label for="proveedor" class="form-label">Proveedor</label>
              <input type="text" class="form-control" id="proveedor" name="proveedor" value="<?php echo isset($proveedor)?$proveedor->prove_descrip:"";?>">
            </div>
          </div>
          <div class="col-12">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Ubicación del proveedor</label>
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
              <label for="exampleInputEmail1" class="form-label">Material que provee</label>
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
              <label for="exampleFormControlInput1" class="form-label">Fecha de registro</label>
              <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>



        <div class="col-12">
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
              <label class="form-check-label" for="flexRadioDefault1">
                Nacional
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                Extranjero
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