<?php
  include('../../clases/BD.php');
  include('../../clases/Proveedor.php');
  include('../../clases/Material.php');
  include('../../clases/Articulo.php');

  $obj_Proveedor = new Proveedor();
  $arr_proveedor = $obj_Proveedor->buscarTodos();

  $obj_Material = new Material();
  $arr_material = $obj_Material->buscarTodos();

  if (isset($_POST['id'])) {
    $obj_Articulo = new Mobiliario();
    $mobiliario = $obj_Articulo->buscarMobiliario($_POST['id']);
  }

?>

      <section id="formulario" class="formA mt-5 mb-5">
        <div class="container">
        <form id="form_mobiliario" name="form_mobiliario" enctype='multipart/form-data' method="POST" class="mt-4 mb-4">

              <div class="col-12">
          <div class="mb-3">
            <label for="proveedor" class="form-label">Proveedor</label>
            <select class="form-select" aria-label="Default select example" id="proveedor" name="proveedor">
              <option selected value="0">Selecciona</option>
              <?php foreach ($arr_proveedor as $proveedor) { ?>
                      <option value="<?php echo $mobiliario['prove_id_prove']; ?>" <?php if(isset($mobiliario)) { if ($mobiliario->id == $proveedor['id']) { ?> selected <?php } }?>>
              <?php echo $proveedor['prove_descrip']; ?>
                      </option>

               <?php } ?>
            </select>
          </div>
        </div>


              <div class="col-12">
                <div class="mb-3">
                  <label for="productoMob" class="form-label">Descripción producto</label>
                  <textarea class="form-control" id="productoMob" name="productoMob" rows="3" value="<?php echo isset($mobiliario)?$mobiliario->productomob:"";?>"><?php echo isset($mobiliario)?$mobiliario->productomob:"";?></textarea>
                  <!--<input type="text" class="form-control" id="productoMob" aria-describedby="emailHelp">-->
                </div>
              </div>

              <div class="col-3">
                <div class="mb-3">
                    <label for="precioMob" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precioMob" name="precioMob" value="<?php echo isset($mobiliario)?$mobiliario->preciomob:"";?>">>
                </div>
              </div>

              <div class="col-3">
                <div class="mb-3">
                  <label for="stockMob" class="form-label">En stock</label>
                  <input type="number" class="form-control" id="stockMob" name="stockMob" value="<?php echo isset($mobiliario)?$mobiliario->stockmob:"";?>">>
                </div>
            </div>

            <div class="col-12">
          <div class="mb-3">

        <?php if (isset($_POST['CRUD'])) { ?>
          <?php if ($_POST['CRUD'] == 1) { ?>
            <button id="btn-actualizar-mobiliario" type="button" class="btn btn-success btn-footer">Actualizar</button> 
            <input type="hidden" name="dml" value="update"/>
            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>              
          <?php } ?>
           <?php }else{ ?>
            <button type="button" class="btn btn-primary" id="btn-agregar-mobiliario">Enviar</button>
            <input type="hidden" name="dml" value="insert"/>
             <?php } ?>
          </div>
        </div>

            </div>
          </form>
        </div>
      </section>

  <!-- Scripts de Bootstrap 5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
