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
      <form class="mt-4 mb-4" id="form_proveedor" enctype='multipart/form-data' method="POST" name="form_proveedor">
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
            <label for="precio" class="form-label">Precio</label>
            <input type="text" id="precio" name="precio" class="form-control" value="<?php echo isset($proveedor)?$proveedor->precio:"";?>">
            </div>
          </div>



          <div class="col-12">
            <div class="mb-3">
               <div class="form-check">
                <input class="form-check-input" type="radio" name="nacionalidad" id="nacional" <?php if(isset($proveedor)) { if ($proveedor->nacionalidad == "nacional") { ?> checked <?php }}?> value="nacional">
                <label class="form-check-label" for="nacionalidad">
                  Nacional
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nacionalidad" id="nacionalidad" value="ext" <?php if(isset($proveedor)) { if ($proveedor->nacionalidad == "ext") { ?> checked <?php }}?>>
                <label class="form-check-label" for="nacionalidad">
                  Extranjero
                </label>
              </div>
            </div>
        </div>



          <div class="col-12">
            <div class="mb-3">
                <label for="numeroTelefono" class="form-label">Número telefónico</label>
                <input type="tel" class="form-control" id="numeroTelefono" name="numeroTelefono" placeholder="(+52)" value="<?php echo isset($proveedor)?$proveedor->numero_telefono:"";?>">
            </div>
          </div>

          <div class="col-12">
            <div class="mb-3">
              <label for="ubicacio" class="form-label">Ubicación</label>
              <input type="text" class="form-control" id="ubicacio" name="ubicacio" value="<?php echo isset($proveedor)?$proveedor->ubicacion:"";?>">
            </div>
          </div>


        <div class="col-12">
          <div class="mb-3">
          <?php if (isset($_POST['CRUD'])) { ?>
          <?php if ($_POST['CRUD'] == 1) { ?>
            <button id="btn-actualizar-proveedor" type="button" class="btn btn-success btn-footer">Actualizar</button> 
            <input type="hidden" name="dml" value="update"/>
            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>              
          <?php } ?>
           <?php }else{ ?>
            <button type="button" class="btn btn-primary" id="btn-agregar-proveedor">Enviar</button>
            <input type="hidden" name="dml" value="insert"/>
             <?php } ?>
          </div>
        </div>

        </div>
      </form>
    </div>
  </section>
  <script src="../sistema/proveedores/proveedores.js"></script>