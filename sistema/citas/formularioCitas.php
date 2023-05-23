<?php
  include('../../clases/BD.php');
  include('../../clases/Citas.php');


  if (isset($_POST['id'])) {
    $obj_Cita = new Citas();
    $citas = $obj_Cita->buscarCita($_POST['id']);
  }

?>

    <section id="formulario" class="formA mt-5 mb-5">
      <div class="container">
      <form id="form_citas" name="form_citas" enctype='multipart/form-data' method="POST" class="mt-4 mb-4">
          
          <div class="row">
              <h3 class="mb-4">Registro de Citas</h3>
              

              <div class="col-12">
                <div class="mb-3">
                  <label for="nombrePa" class="form-label">Nombre del paciente</label>
                  <input type="text" id="nombrePa" name="nombrePa">
                </div>
              </div>


              <div class="col-12">
                <div class="mb-3">
                  <label for="fechaCita" class="form-label">Fecha de la cita</label>
                  <input type="date" id="fechaCita" name="fechaCita">
                </div>
              </div>


              <div class="col-12">
                <div class="mb-3">
                  <label for="horaCita" class="form-label">Hora de la cita</label>
                  <input type="time" id="horaCita" name="horaCita">
                </div>
              </div>


              <div class="mb-3">
                <label for="motivoCita" class="form-label">Motivo de la cita</label>
                <textarea class="form-control" id="motivoCita" name="motivoCita" rows="3"></textarea>
              </div>


              <div class="col-12">
                <div class="mb-3">

                  <?php if (isset($_POST['CRUD'])) { ?>
                    <?php if ($_POST['CRUD'] == 1) { ?>
                      <button id="btn-actualizar-citas" type="button" class="btn btn-success btn-footer">Actualizar</button> 
                      <input type="hidden" name="dml" value="update"/>
                      <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>              
                  <?php } ?>
                    <?php }else{ ?>
                      <button type="button" class="btn btn-primary" id="btn-agregar-citas">Enviar</button>
                      <input type="hidden" name="dml" value="insert"/>
                      <?php } ?>
                </div>
              </div>



          </div>
      </form>
      </div>
    </section>
    <script src="../sistema/citas/citas.js"></script>